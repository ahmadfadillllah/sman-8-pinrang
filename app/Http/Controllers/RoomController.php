<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Room;
use App\Models\RoomParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sender_id = $request->sender;
        $receiver_id = $request->receiver;
        $message = $request->message;

        $room = Room::create([
            'created_by' => $sender_id,
        ]);

        DB::table('room_participants')->insert([
            'room_id' => $room->id,
            'user_id' => $sender_id,
            'join_date' => now()
        ]);

        DB::table('room_participants')->insert([
            'room_id' => $room->id,
            'user_id' => $receiver_id,
            'join_date' => now()
        ]);

        $messages = Message::create([
            'room_id' => $room->id,
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'message_text' => $message,
            'read_at' => null,
        ]);

        return json_encode($messages);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
