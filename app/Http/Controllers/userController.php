<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password; 
        

      
    }

    public function register(Request $request){
        // TODO look into whether we would handle checking if a user with this email already exists here, or in middleware. git s
        // attempt to register this user. 
        $userName = $request->userName;
        $email = $request->email;
        $password = $request->password; 
        // if a user already exists with that account, return. 
        // if we are missing data, throw an error, return; 
        // else, insert the data into the db, and then return.         
        return [];
    }

    public function listAllUsers(Request $request){
        // get me all of the users that aren't this id 
    }
}
