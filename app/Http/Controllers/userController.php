<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function login(Request $request){
      // TODO read more about middleware authentication. 
      // TODO 
    }

    public function register(Request $request){
        // TODO look into whether we would handle checking if a user with this email already exists here, or in middleware. git s
        return [];
    }
}
