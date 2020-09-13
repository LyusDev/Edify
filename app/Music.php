<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use \App\UserPlaylist;
use Illuminate\Database\Eloquent\Relations\Concerns\InteractsWithPivotTable;

class Music extends Model
{
    protected $fillable = ['music_title', 'music_artist', 'music_album', 'music_path', 'music_img'];

    public function userplaylist()
    {
        return $this->belongsTo(UserPlaylist::class);
    }


}
