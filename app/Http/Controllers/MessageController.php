<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Http\Resources\RoomResource;
use App\Models\Message;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Room By User Id
        $room = User::find(auth()->user()->id)->rooms()->get();

        // Get Room Collection
        $messages = RoomResource::collection($room);

        // Convert Room to Array
        $data = json_decode($messages->toJson(), true);

        // all users contact
        $contacts = User::where('id', '!=', auth()->user()->id)->get();

        return view('group.index', compact('data', 'contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_id = $request->room;
        $sender_id = $request->sender;
        $receiver_id = $request->receiver;
        $message = $request->message;

        $message = Message::create([
            'room_id' => $room_id,
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'message_text' => $message,
            'read_at' => null,
        ]);

        return json_encode($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $room_id = $request->room;
        $user_id = $request->user;

        $room = Room::find($room_id);
        $room->message = $room->messages()->get();
        $room->participants_id = $room->participants()->where('user_id', '!=', $user_id)->first()->id;

        return json_encode($room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        // update read_at
        $room_id = $request->room;
        $receiver_id = $request->receiver;

        // set all read_at to now()
        $messages = Message::where('room_id', $room_id)
            ->where('sender_id', $receiver_id)
            ->where('read_at', null)
            ->update(['read_at' => now()]);

        return json_encode($messages);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
