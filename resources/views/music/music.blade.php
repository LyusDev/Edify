@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{$playlist_name}}</h3>
                </div>
                <div class="card-body">
                    @foreach($getMusic as $music)
                    <div class="d-flex">
                        <img src="/storage/music/music_img_folder/{{$music->music_img}}">
                        <div class="ml-2">
                            <h4>{{$music->music_title}}</h4>
                            <h6>{{$music->music_artist}}</h6>
                            <button class="btn btn-success mr-1">Play</button>
                            <!-- <audio controls>
                                <source src="/storage/music/music_folder/{{$music->music_path}}" type="audio/mpeg" />Your browser doest not support the audio element
                            </audio> -->
                        </div>
                    </div>
                    <br />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection