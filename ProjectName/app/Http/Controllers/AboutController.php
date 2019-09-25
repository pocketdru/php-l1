<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function index()
    {
        // $first_name = "Mari";
        // $last_name = "Al Ali";
        // $email = "mary@gmail.com";
    
        $first_names = ["Mari", "Vlada"];
        $last_names = ["Al Ali", "Mayskaya"];
        $emails = ["mary@gmail.com", "vlada@vlada .com"];

        $my_full_name = $first_names[0] . " " . $last_names[0];
        $buddy_full_name = $first_names[1] . " " . $last_names[1];
        $full_names = [$my_full_name, $buddy_full_name];

        return view('about', compact("full_names", "emails"));
    }
}
