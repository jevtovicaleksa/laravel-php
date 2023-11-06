<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $allUsers =  User::all();

        return $allUsers;
    }

    public function store(Request $request)
    {
        $user = User::create([
            'username' => 'aleksa',
            'email' => 'aleksa@aleksa.com',
            'password' => bcrypt('password')
        ]);

        return $user;
    }
}
