<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('Home');
    }
    public function Contact()
    {
        return view('Contact');
    }
}