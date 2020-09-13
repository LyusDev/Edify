<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Playlist;
use App\Music;

class UserPlaylist extends Model
{
    protected $fillable = ['music_id', 'playlist_id'];

    public function playlist(){
        return $this->belongsTo(Playlist::class);
    }

    public function musics(){
        return $this->hasMany(Music::class);
    }
}
