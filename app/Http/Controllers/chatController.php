<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatController extends Controller
{
    public function message(Request $request){
        event(new Message($request->input('username'), $request->input('messsage')))
        return [];
    }
}