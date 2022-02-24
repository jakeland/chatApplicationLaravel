<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class userController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password; 
        
        $response = response()->json(User::where('email', $email)->where('password', $password)->get());
        if(!$response->isEmpty()){
            return $response;
        }else{
            // set up errors based on type.
            // todo get correct response. currently not returning a response. weird. 
            $json_response = [];
            $json_response->error_code = '401';
            $json_response->error_title = 'incorrect login';
            $json_response->error_message = 'The username or password was incorrect';
            return response()->json([$json_response]);

        }
        //TODO add authentication 
        // TODO remove sensative data from return; 

      
    }

    public function register(Request $request){
        // TODO look into whether we would handle checking if a user with this email already exists here, or in middleware. git s
        // attempt to register this user. 
        
        $email = $request->email;
        $password = $request->password; 
        $lastName = $request->last_name;
        $firstName = $request->first_name; 

        $user = new User;
        $user->firstName = $firstName;
        $user->lastName = $lastName; 
        $user->email = $email;
        $user->password = $password; // TODO fix this 
        
        if(!$user->save()){
            App::abort(500, 'Error');
        }
        // if a user already exists with that account, return. 
        // if we are missing data, throw an error, return; 
        // else, insert the data into the db, and then return.         
         return response()->json($user);
    }

    public function listAllUsers(Request $request){
        // get me all of the users that aren't this id 
        $currentUserId = $request->userId;
        return response()->json(User::allUsersExcept($currentUserId));
    }
}
