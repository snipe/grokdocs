<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    
    public function show($username) {

        $user = User::findByUsername($username);
        return view('users.show')->with('user', $user);

    }

}
