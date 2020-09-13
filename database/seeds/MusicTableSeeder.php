<?php

use Illuminate\Database\Seeder;

class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $music = new \App\Music(
        
        [
            'music_title' => 'Yellow Hearts',
            'music_artist' => 'Aun Saunders',
            'music_album' => 'Yellow Hearts',
            'music_path' => 'Yellow_Hearts.mp3',
            'music_img' => 'Yellow_Hearts.png',
        ],

        // [
        //     'music_title' => 'Ispy',
        //     'music_artist' => 'Kyle',
        //     'music_album' => 'Ispy',
        //     'music_path' => 'Ispy.mp3',
        //     'music_img' => 'Ispy.png',
        // ],
    );

        $music->save();
    }
}
