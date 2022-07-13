<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home')->with('success', 'Correcto');
        // if (session('userSession')) {
        //     return view('home');
        // }

        // return redirect('/');
    }
}
