<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('dashboard.home');
    }

    public function websites()
    {
        return view('dashboard.websites');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function billing()
    {
        return view('dashboard.billing');
    }

    public function security()
    {
        return view('dashboard.security');
    }

    public function help()
    {
        return view('dashboard.help');
    }

    public function start()
    {
        return view('dashboard.start');
    }
}
