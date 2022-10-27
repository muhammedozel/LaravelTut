<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function loadView()
    {
        return view("users", ['users' => ['muhammed', 'ahmet', 'enes']]);
    }
}
