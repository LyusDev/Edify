<?php

use Illuminate\Database\Seeder;

class PlaylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlist = new \App\Playlist([
        
            'playlist_name' => 'sample_playlist2',
            'user_id' => 1,
     
        ], 
    
    );

        $playlist->save();
    }
}
