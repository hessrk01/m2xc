<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Drive to portfolio page
     */
    public function portfolio() {
        return view('welcome.portfolio');
    }

    public function index() {
        return view('welcome');
    }
}
