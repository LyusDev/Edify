@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>My Playlists</h3>
                    <a href="/createPlaylist"><button class="btn btn-outline-info">+ Add a Playlist</button></a>
                </div>

                <div class="card-body">
                    <playlists/>
                </div>
            </div>
        </div>


    </div>
</div>



@endsection