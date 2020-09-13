<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Music;
use App\Playlist;

use App\Http\Resources\Music as MusicResource;
use App\UserPlaylist;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::paginate(2);

        return MusicResource::collection($musics);
    }

    public function show($id)
    {
        $music = Music::findOrFail($id);

        return new MusicResource($music);
    }

    public function getAllMusic(){
        $music = Music::all();

        return $music;
    }

    public function getMusic($id)
    {
        $playlist_name = Playlist::find($id)->playlist_name;

        $getMusic = UserPlaylist::all()->where('playlist_id', $id);

        // $getMusic = DB::table('user_playlists')->select('*')
        //     ->join('musics', 'musics.id', 'user_playlists.music_id')
        //     ->get()->where('playlist_id', $id);

        return $getMusic;

        // return view('/music/music', compact('getMusic','playlist_name'));
    }

}
