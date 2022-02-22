<?php

namespace App\Http\Controllers;
use App\Events\Message; 
use Illuminate\Http\Request;

class chatController extends Controller
{
    public function sendMessage(Request $request){
        event(
            // TODO swap out usernames with IDs 
             // TODO store the message with the info in the DB before we send the data to postman
             // TODO add checks to bounce messages when we don't meet the required chats. 

            new Message($request->input('sender_username'), 
            $request->input('reciever_username'), 
            $request->input('chat_message')
            )
           
        );
        return [];
    }

    public function viewMessages(Request $request){
        // TODO look a
        return [];
    }

}


