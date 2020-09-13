<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use \App\User;
use \App\UserPlaylist;
use \App\Music;

class Playlist extends Model
{
    protected $fillable = ['user_id','playlist_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    public function userplaylists(){
        
        return $this->hasMany(UserPlaylist::class);
    }

}
