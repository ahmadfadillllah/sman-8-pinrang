<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'room_id' => $this->id,
            'created_by' => $this->creator->name,
            'participants' => $this->participants->where('id', '!=', auth()->user()->id)->first(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'messages' => $this->messages->last(),
            'not_read_messages' => $this->messages->where('read_at', null)->where('sender_id', '!=', auth()->user()->id)->count(),
        ];
    }
}   
