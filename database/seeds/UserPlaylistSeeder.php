<?php

use Illuminate\Database\Seeder;

Use App\UserPlaylist;

class UserPlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userplaylist = new UserPlaylist([
            'music_id' => 1,
            'playlist_id' => 1,
        ]);

        $userplaylist->save();
    }
}
