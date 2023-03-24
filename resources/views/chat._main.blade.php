<!DOCTYPE html>
<html lang="en">
{{-- <?php dd($data); ?> --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Live Chat</title>
</head>

<body>
    <div class="p-5 w-[1000px]">
        <h1 class="mb-5">Live Chat</h1>
        <div class="flex gap-3 mb-5">
            <div class="flex flex-col gap-5 w-[500px]" id="user-wrapper">
            </div>
            <div class="w-full ">
                <div class="border h-[600px] overflow-y-auto p-3" id="chat"></div>
                <div class="flex mt-5 gap-4">
                    <input class="border p-3 w-full" type="text" id="message" data-receiver="0" disabled>
                    <button id="submit-btn" class="p-3 rounded bg-blue-500 text-white disabled:bg-gray-400"
                        onclick="submitChat()" disabled>Kirim</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script src="https://cdn.socket.io/socket.io-3.0.5.js"></script>
<script>
    const server = io('http://localhost:3000')
    const senderId = "<?= Auth::user()->id ?>"
    let listUser = <?= json_encode($data) ?>

    const renderListUser = () => {
        // order list user by message.created_at desc
        const orderList = listUser.sort((a, b) => {
            return new Date(b.messages.created_at) - new Date(a.messages.created_at)
        })
        // get user wrapper
        const userWrapper = document.getElementById('user-wrapper')

        // clear user wrapper
        userWrapper.innerHTML = ''

        // insert listUser to user wrapper
        orderList.forEach(item => {
            userWrapper.innerHTML += `
                <div class="bg-blue-200 p-3 user cursor-pointer rounded flex items-center justify-between" data-room="${item.room_id}" data-id="${item.participants.id}">
                    <div>
                        ${item.participants.name}
                        <div id="last-message">
                            ${item.messages.message_text}
                        </div>
                    </div>
                    <div class="w-7 h-7 bg-red-500 rounded-full text-white flex items-center justify-center counter hidden" data-count="${item.not_read_messages}">
                    </div>
                </div>
            `
        })

        const counters = document.querySelectorAll('.counter')
        counters.forEach(counter => {
            // set data-count to innerHTML

            if (counter.getAttribute('data-count') != 0) {
                counter.style.display = 'flex'
            }
            counter.innerHTML = counter.getAttribute('data-count')
        })
    }

    renderListUser()

    const users = document.querySelectorAll('.user')
    const chat = document.getElementById('chat')
    const counters = document.querySelectorAll('.counter')
    const message = document.getElementById('message')
    const button = document.getElementById('submit-btn')
    let room_id = null
    let dataChat = []

    // each user onclick get data-id attribute
    users.forEach(user => {
        user.addEventListener('click', () => {
            const id = user.getAttribute('data-room')
            const receiverId = user.getAttribute('data-id')
            room_id = id

            // emit event to server
            server.emit('show-chat', {
                id,
                userId: senderId,
                receiverId
            })
        })
    })

    counters.forEach(counter => {
        // set data-count to innerHTML

        if (counter.getAttribute('data-count') != 0) {
            counter.style.display = 'flex'
        }
        counter.innerHTML = counter.getAttribute('data-count')
    })

    // format Date
    const formatDate = (date) => {
        const d = new Date(date)
        const year = d.getFullYear()
        const month = String(d.getMonth() + 1).padStart(2, '0')
        const _date = String(d.getDate()).padStart(2, '0')
        const hour = String(d.getHours()).padStart(2, '0')
        const minute = String(d.getMinutes()).padStart(2, '0')
        const second = String(d.getSeconds()).padStart(2, '0')

        return `${hour}:${minute}:${second}`
    }

    // render chat
    const renderChat = () => {
        chat.innerHTML = ''
        // insert chat to chat div
        dataChat.forEach(item => {
            // if sender id is equal to sender id bg color is blue, else bg color is green
            if (item.sender_id == senderId) {
                chat.innerHTML += `
                    <div class="flex justify-end">
                        <div class="bg-green-200 w-4/6 rounded text-end p-3 mb-3">
                            ${item.message_text}
                            <span class="block text-xs mt-2 text-gray-500">
                                ${formatDate(item.created_at)}
                            </span>
                        </div>    
                    </div>
                `
            } else {
                chat.innerHTML += `
                    <div class="flex justify-start">
                        <div class="bg-blue-200 w-4/6 rounded p-3 mb-3">
                            ${item.message_text}
                            <span class="block text-xs mt-2 text-gray-500">
                                ${formatDate(item.created_at)}
                            </span>
                        </div>    
                    </div>
                `
            }
        })

        // enable message input
        message.disabled = false
        // reset message value
        message.value = ''
        // scroll to end chat
        chat.scrollTop = chat.scrollHeight
    }

    server.on('show-chat', data => {
        dataChat = data.message
        // set message data-receiver to data.participants_id
        message.setAttribute('data-receiver', data.participants_id)

        // search user where data-id is equal to data.participants_id
        const user = document.querySelector(`.user[data-id="${data.participants_id}"]`)

        // search class counter in user, and set value data-count to 0 and inner html to 0 and display none
        const counter = user.querySelector('.counter')
        counter.setAttribute('data-count', 0)
        counter.innerHTML = 0
        counter.style.display = 'none'

        // Render Chat
        renderChat()
    })

    const submitChat = () => {
        const message_value = message.value
        const receiverId = message.getAttribute('data-receiver')

        const data = {
            room: room_id,
            sender: senderId,
            receiver: receiverId,
            message: message_value
        }

        server.emit('submit-chat', data)
    }

    server.on('chat-update', data => {
        if (room_id !== data.room_id) {
            // search user where data-room is equal to data.room_id
            const user = document.querySelector(`.user[data-room="${data.room_id}"]`)
            // set value class counter in user data-count + 1 and inner html + 1 and display flex
            const lastMessage = data.message[data.message.length - 1]

            listUser = listUser.map(item => {
                if (item.room_id == data.room_id) {
                    item.messages = lastMessage
                    item.not_read_messages = parseInt(item.not_read_messages) + 1
                }
                return item
            })

            renderListUser()

            const counter = user.querySelector('.counter')
            counter.setAttribute('data-count', parseInt(counter.getAttribute('data-count')) + 1)
            counter.innerHTML = counter.getAttribute('data-count')

            if (counter.getAttribute('data-count') != 0) {
                counter.style.display = 'flex'
            }

        } else {
            dataChat = data.message
            renderChat()
        }
    })

    const test = () => {
        // get class counter foreach user
        users.forEach(user => {
            // get class counter in user
            const counter = user.querySelector('.counter')
            // data-counter + 1
            counter.setAttribute('data-count', parseInt(counter.getAttribute('data-count')) + 1)
            counter.innerHTML = counter.getAttribute('data-count')

            // if data-counter is not 0, display flex
            if (counter.getAttribute('data-count') != 0) {
                counter.style.display = 'flex'
            }
        })
    }

    message.addEventListener('input', () => {
        if (message.value.length > 0) {
            button.disabled = false
        } else {
            button.disabled = true
        }
    })
</script>

<script></script>
