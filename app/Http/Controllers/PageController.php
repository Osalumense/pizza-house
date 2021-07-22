<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Render index page
    
    public function index () {
        return view('index');
    }

    // Render welcome page.

    public function welcome () {
        return view('welcome');
    }

    //Render admin index page

    public function admin () {
        return view('admin.index');
    }
}
