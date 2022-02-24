<?php

namespace App\Http\Controllers;
// use App\Events\Message; 
use Illuminate\Http\Request;
use App\Models\Message; // for saving and retrieving messages


class chatController extends Controller
{
    public function sendMessage(Request $request){
        // used to make it easier to add pusher later. 
        $recieverUserId = $request->input('sender_userId');
        $senderUserId = $request->input('sender_userId');
        $messageContent = $request->input('chat_message');

        $message = new Message; 
        $message->senderUserId = $senderUserId;
        $message->recieverUserId = $recieverUserId; 
        $message->content = $messageContent; 
        if(!$message->save()){
            App::abort(500, 'Error');
        }
        //    rough concept to allow pusher.  
        //    event(
        //     // TODO swap out usernames with IDs 
        //      // TODO store the message with the info in the DB before we send the data to pusher
        //      // TODO add checks to bounce messages when we don't meet the required values
        //     new Message(  $senderUserId, 
        //     $recieverUserId, 
        //     $chatContent
        //     )
           
        // );
        

        return ['this is my sendMessage  response'];
    }

    public function viewMessages(Request $request){
        // given a chat ID list all messages, 
        $current_user = $request->input('sender_userId');
        $target_user = $request->input('reciever_userId');
        
        
        return response()->json(Message::userChats($current_user, $target_user));
    }

}


