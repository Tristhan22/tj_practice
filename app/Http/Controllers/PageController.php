<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage() {
        return view('home');
    }
    
    public function profilePage() {
        return view('profile');
    //
    }
    public function evntsPage() {
        return view('events');
    }
    public function loginPage() {
        return view('login');
    }
    public function registerPage() {
        return view('register');
    }
}