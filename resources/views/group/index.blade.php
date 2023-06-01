@extends('layouts.app')

{{-- {{ dd($data) }} --}}

@section('style')
    <style>
        .counter {
            background-color: red;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none
        }

        .bg-green {
            background-color: rgb(204, 255, 204);
        }

        .bg-bluesky {
            background-color: rgb(151, 229, 253);
        }
    </style>
@endsection

@section('content')
    <div class="app-chat card overflow-hidden">
        <div class="row g-0">
            <!-- Sidebar Left -->
            <div class="col app-chat-sidebar-left app-sidebar overflow-hidden" id="app-chat-sidebar-left">
                <div
                    class="chat-sidebar-left-user sidebar-header d-flex flex-column justify-content-center align-items-center flex-wrap px-4 pt-5">
                    <div class="avatar avatar-xl avatar-online">
                        <img src="{{ auth()->user()->avatar }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <h5 class="mt-2 mb-0">John Doe</h5>
                    <small>Admin</small>
                    <i class="ti ti-x ti-sm cursor-pointer close-sidebar" data-bs-toggle="sidebar" data-overlay
                        data-target="#app-chat-sidebar-left"></i>
                </div>
                <div class="sidebar-body px-4 pb-4">
                    <div class="my-4">
                        <p class="text-muted text-uppercase">About</p>
                        <textarea id="chat-sidebar-left-user-about" class="form-control chat-sidebar-left-user-about mt-3" rows="4"
                            maxlength="120">Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea>
                    </div>
                    <div class="my-4">
                        <p class="text-muted text-uppercase">Status</p>
                        <div class="d-grid gap-1">
                            <div class="form-check form-check-success">
                                <input name="chat-user-status" class="form-check-input" type="radio" value="active"
                                    id="user-active" checked>
                                <label class="form-check-label" for="user-active">Active</label>
                            </div>
                            <div class="form-check form-check-danger">
                                <input name="chat-user-status" class="form-check-input" type="radio" value="busy"
                                    id="user-busy">
                                <label class="form-check-label" for="user-busy">Busy</label>
                            </div>
                            <div class="form-check form-check-warning">
                                <input name="chat-user-status" class="form-check-input" type="radio" value="away"
                                    id="user-away">
                                <label class="form-check-label" for="user-away">Away</label>
                            </div>
                            <div class="form-check form-check-secondary">
                                <input name="chat-user-status" class="form-check-input" type="radio" value="offline"
                                    id="user-offline">
                                <label class="form-check-label" for="user-offline">Offline</label>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <p class="text-muted text-uppercase">Settings</p>
                        <ul class="list-unstyled d-grid gap-2 me-3">
                            <li class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='ti ti-message me-1'></i>
                                    <span class="align-middle">Two-step Verification</span>
                                </div>
                                <label class="switch switch-primary me-4">
                                    <input type="checkbox" class="switch-input" checked="" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                </label>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class='ti ti-bell me-1'></i>
                                    <span class="align-middle">Notification</span>
                                </div>
                                <label class="switch switch-primary me-4">
                                    <input type="checkbox" class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <i class="ti ti-user-plus me-1"></i>
                                <span class="align-middle">Invite Friends</span>
                            </li>
                            <li>
                                <i class="ti ti-trash me-1"></i>
                                <span class="align-middle">Delete Account</span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex mt-4">
                        <button class="btn btn-primary" data-bs-toggle="sidebar" data-overlay
                            data-target="#app-chat-sidebar-left">Logout</button>
                    </div>
                </div>
            </div>
            <!-- /Sidebar Left-->

            <!-- Chat & Contacts -->
            <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end" id="app-chat-contacts">
                <div class="sidebar-header">
                    <div class="d-flex align-items-center me-3 me-lg-0">
                        <div class="flex-shrink-0 avatar avatar-online me-3" data-bs-toggle="sidebar"
                            data-overlay="app-overlay-ex" data-target="#app-chat-sidebar-left">
                            <img class="user-avatar rounded-circle cursor-pointer" src="{{asset('app-assets/images/illustrator')}}/{{ auth()->user()->avatar }}"
                                alt="Avatar" width="50px">
                        </div>
                        <div class="flex-grow-1 input-group input-group-merge rounded-pill">
                            <input type="text" class="form-control chat-search-input" placeholder="Search..."
                                aria-label="Search..." aria-describedby="basic-addon-search31">
                        </div>
                    </div>
                    <i class="ti ti-x cursor-pointer d-lg-none d-block position-absolute mt-2 me-1 top-0 end-0"
                        data-overlay data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i>
                </div>
                <hr class="container-m-nx m-0">
                <div class="sidebar-body">

                    <div class="chat-contact-list-item-title">
                        <h5 class="text-primary mb-0 p-2">Chats</h5>
                    </div>
                    <!-- Chats -->
                    <ul class="list-unstyled chat-contact-list" id="user-wrapper">

                    </ul>
                    <div class="chat-contact-list-item-title">
                        <h5 class="text-primary mb-0 p-2">Contacts</h5>
                    </div>
                    <!-- Chats -->
                    <ul class="list-unstyled chat-contact-list">
                        @foreach ($contacts as $contact)
                            <li class="chat-contact-list-item contact-user" data-id="{{ $contact->id }}"
                                onclick="startChat({{ $contact->id }})">
                                <a class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar avatar-online">
                                        <img src="{{asset('app-assets/images/illustrator')}}/{{ $contact->avatar }}" alt="Avatar" class="rounded-circle"
                                            width="50px" height="50px">
                                    </div>
                                    <div class="chat-contact-info flex-grow-1 ms-2">
                                        <h6 class="chat-contact-name text-truncate m-0">{{ $contact->name }}</h6>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /Chat contacts -->

            <!-- Chat History -->
            <div class="col app-chat-history">
                <div class="chat-history-wrapper">
                    <div class="chat-history-header border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex overflow-hidden align-items-center" id="participant-user">
                                <h5 class="p-1">Live Chat</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="ti ti-phone-call cursor-pointer d-sm-block d-none me-3"></i>
                                <i class="ti ti-video cursor-pointer d-sm-block d-none me-3"></i>
                                <i class="ti ti-search cursor-pointer d-sm-block d-none me-3"></i>
                                <div class="dropdown">
                                    <i class="ti ti-dots-vertical cursor-pointer" id="chat-header-actions"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </i>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="chat-header-actions">
                                        <a class="dropdown-item" href="javascript:void(0);">View Contact</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mute Notifications</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Block Contact</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Clear Chat</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-history-body bg-blue-200y">
                        <ul class="list-unstyled chat-history px-2" id="chat">
                        </ul>
                    </div>
                    <!-- Chat message form -->
                    <div class="chat-history-footer shadow-sm">
                        <form class="form-send-message d-flex justify-content-between align-items-center ">
                            <input class="form-control message-input border-0 me-3 shadow-none" id="message"
                                data-receiver="0" placeholder="Type your message here" disabled>
                            <div class="message-actions d-flex align-items-center">
                                <i class="speech-to-text ti ti-microphone ti-sm cursor-pointer"></i>
                                <label for="attach-doc" class="form-label mb-0">
                                    <i class="ti ti-photo ti-sm cursor-pointer mx-3"></i>
                                    <input type="file" id="attach-doc" hidden>
                                </label>
                                <button type="button" onclick="submitChat()" class="btn btn-primary d-flex send-msg-btn"
                                    id="submit-btn" disabled>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Chat History -->

            <div class="app-overlay"></div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.socket.io/socket.io-3.0.5.js"></script>
    <script>
        const server = io('https://chat.mahesadev.com')
        const senderId = "<?= Auth::user()->id ?>"
        let listUser = <?= json_encode($data) ?>

        // each user onclick get data-id attribute
        const readChat = (room, receiver) => {
            const id = room
            const receiverId = receiver
            room_id = id

            // emit event to server
            server.emit('show-chat', {
                id,
                userId: senderId,
                receiverId
            })
        }

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
                <li class="chat-contact-list-item user" onclick="readChat(${item.room_id}, ${item.participants.id})" data-room="${item.room_id}" data-id="${item.participants.id}">
                    <a class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar avatar-online">
                            <img src="{{asset('app-assets/images/illustrator')}}/${item.participants.avatar}" alt="Avatar"
                                class="rounded-circle" width="50px" height="50px">
                        </div>
                        <div class="chat-contact-info flex-grow-1 ms-2">
                            <h6 class="chat-contact-name text-truncate m-0">${item.participants.name}</h6>
                            <p class="chat-contact-status text-muted text-truncate mb-0">${item.messages.message_text}</p>
                        </div>
                        <div class="counter"data-count="${item.not_read_messages}"></div>
                    </a>
                </li>
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
        const participantUser = document.getElementById('participant-user')
        let room_id = null
        let dataChat = []

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
                    <li class="chat-message chat-message-right">
                        <div class="d-flex overflow-hidden">
                            <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text bg-bluesky">
                                    <p class="mb-0"> ${item.message_text}</p>
                                </div>
                                <div class="text-end text-muted mt-1">
                                    <i class='ti ti-checks ti-xs me-1 text-success'></i>
                                    <small>${formatDate(item.created_at)}</small>
                                </div>
                            </div>
                        </div>
                    </li>
                `
                } else {
                    chat.innerHTML += `
                    <li class="chat-message">
                        <div class="d-flex overflow-hidden">
                            <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text bg-body">
                                    <p class="mb-0">${item.message_text}</p>
                                </div>
                                <div class="text-muted mt-1">
                                    <small>${formatDate(item.created_at)}</small>
                                </div>
                            </div>
                        </div>
                    </li>
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

            // get name by class "chat-contact-name"
            const name = user.querySelector('.chat-contact-name').innerText

            // get image in div with class "avatar-online"
            const image = user.querySelector('.avatar-online')
            // get img tag and get src attribute
            const imageSrc = image.querySelector('img').getAttribute('src')


            // set participantUser inner html to data.participants_name
            participantUser.innerHTML = ''
            participantUser.innerHTML = `
            <div class="flex-shrink-0 avatar">
                <img src="{{asset('app-assets/images/illustrator')}}/${imageSrc}" alt="Avatar"
                    class="rounded-circle" width="50px" height="50px" data-bs-toggle="sidebar" data-overlay
                    data-target="#app-chat-sidebar-right">
            </div>
            <div class="chat-contact-info flex-grow-1 ms-2">
                <h6 class="m-0">${name}</h6>
            </div>
            `

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

            // set button to disabled
            button.disabled = true
            // set button text to "sending..."
            button.innerHTML = 'Sending...'

            // disable message input
            message.disabled = true
        }

        const startChat = (id) => {
            // search user where data-id is equal to id
            const user = document.querySelector(`.user[data-id="${id}"]`)

            if (!user) {
                const user = document.querySelector(`.contact-user[data-id="${id}"]`)
                // get name by class "chat-contact-name"
                const name = user.querySelector('.chat-contact-name').innerText

                // get image in div with class "avatar-online"
                const image = user.querySelector('.avatar-online')
                // get img tag and get src attribute
                const imageSrc = image.querySelector('img').getAttribute('src')


                // set participantUser inner html to data.participants_name
                participantUser.innerHTML = ''
                participantUser.innerHTML = `
                <div class="flex-shrink-0 avatar">
                    <img src="${imageSrc}" alt="Avatar"
                        class="rounded-circle" width="50px" height="50px" data-bs-toggle="sidebar" data-overlay
                        data-target="#app-chat-sidebar-right">
                </div>
                <div class="chat-contact-info flex-grow-1 ms-2">
                    <h6 class="m-0">${name}</h6>
                </div>`

                chat.innerHTML = ''
                room_id = null
                message.setAttribute('data-receiver', id)
                message.value = ''
                message.disabled = false
                button.disabled = false
            } else {
                const room_id = user.getAttribute('data-room')
                const receiverId = user.getAttribute('data-id')

                // emit event to server
                server.emit('show-chat', {
                    id: room_id,
                    userId: senderId,
                    receiverId
                })
            }
        }

        server.on('chat-update', data => {
            // enable button
            button.disabled = false
            // set button text to "send"
            button.innerHTML = 'Send'

            // enable message input
            message.disabled = false

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
                const lastMessage = data.message[data.message.length - 1]
                // re render list user
                listUser = listUser.map(item => {
                    if (item.room_id == data.room_id) {
                        item.messages = lastMessage
                        item.not_read_messages = 0
                    }
                    return item
                })
                renderListUser()

                // re  render chat
                dataChat = data.message
                renderChat()
            }
        })

        server.on('send-chat', datas => {

            // enable button
            button.disabled = false
            // set button text to "send"
            button.innerHTML = 'Send'

            // enable message input
            message.disabled = false

            dataChat = datas.data.message
            renderChat()

            // get class contact-user where data-id is equal to data.sender
            const user = document.querySelector(`.contact-user[data-id="${datas.receiver}"]`)

            // get user name from class chat-contact-name
            const name = user.querySelector('.chat-contact-name').innerText

            // get image in div with class "avatar-online"
            const image = user.querySelector('.avatar-online')
            // get img tag and get src attribute
            const imageSrc = image.querySelector('img').getAttribute('src')

            const item = {
                room_id: datas.data.id,
                participants: {
                    id: datas.data.participants_id,
                    name: name,
                    avatar: imageSrc
                },
                messages: {
                    message_text: datas.data.message[0].message_text,
                    created_at: datas.data.message[0].created_at
                },
                not_read_messages: 0
            }

            // push item to listUser
            listUser.push(item)
            renderListUser()

            room_id = datas.data.id
        })

        server.on('new-chat', datas => {
            if (datas.receiver !== senderId) return

            // get class contact-user where data-id is equal to data.sender
            const user = document.querySelector(`.contact-user[data-id="${datas.sender}"]`)
            // get user name from class chat-contact-name
            const name = user.querySelector('.chat-contact-name').innerText

            // get image in div with class "avatar-online"
            const image = user.querySelector('.avatar-online')
            // get img tag and get src attribute
            const imageSrc = image.querySelector('img').getAttribute('src')

            const item = {
                room_id: datas.data.id,
                participants: {
                    id: datas.sender,
                    name: name,
                    avatar: imageSrc
                },
                messages: {
                    message_text: datas.data.message[0].message_text,
                    created_at: datas.data.message[0].created_at
                },
                not_read_messages: 1
            }

            // push item to listUser
            listUser.push(item)
            renderListUser()
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
@endsection
