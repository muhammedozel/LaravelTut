<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user)
    {
        echo $user;
        echo "\nHello from controller\n";
        return ['name' =>"Muhammed", 'age' => "25"];
    }
}