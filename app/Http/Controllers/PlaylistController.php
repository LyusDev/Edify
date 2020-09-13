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

class PlaylistController extends Controller
{

    public function getPlaylist()
    {
        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $getplaylist = $user->playlists;

        return $getplaylist;
    }

    public function index()
    {

        return view('playlist/playlist');
    }

    public function addToPlaylist(Request $request)
    {
        $flag = 1;

        $play_id = $request->playlist_id;

        $music_id = $request->music_id;

        $user_id = Auth::user()->id;

        $data = new UserPlaylist([
            'music_id' => $music_id,
            'playlist_id' => $play_id,
        ]);

        $data->save();
        

        return redirect('/home/' . $user_id)->with($flag);
    }

    public function create()
    {
        return view('playlist/create');
    }

    public function store(Request $request)
    {

        $user_id = Auth::user()->id;

        $playlist_name = $request->playlist_name;

        $data = new Playlist([
            'playlist_name' => $playlist_name,
            'user_id' => $user_id
        ]); 

        $data->save();

        return redirect('/playlist');
    }
}
