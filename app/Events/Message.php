<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Message implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $chat_message; 
    public $sender_username;
    public $reciever_username;

    // php 7.2 syntax. 
    public function __construct($sender_username, $reciever_username, $chat_message)
    {
        $this->chat_message = $chat_message;
        $this->sender_username = $sender_username;
        $this->reciever_username = $reciever_username;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chat'); // channel
    }

    public function broadcastAs(){
        return 'message';  //message
    }
}
