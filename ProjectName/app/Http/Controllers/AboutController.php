<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function index()
    {
        $first_name = "Mari";
        $last_name = "Al Ali";
        $email = "mary@gmail.com";
    
        return view('about', compact("first_name", "last_name", "email"));
    }
}
