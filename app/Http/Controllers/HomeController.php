<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use \App\Music;
use \App\User;
use \App\UserPlaylist;
use \App\Playlist;

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
    

    public function Index(User $user)
    {
        return view('home', compact('user'));
    }
}
