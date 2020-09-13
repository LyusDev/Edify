@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Add a Playlist</h1>
                </div>

                <div class="card-body">
                    <form action="/saveplaylist" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <label>Playlist Name:</label>

                        <input type="text" class="form-control" name="playlist_name" />
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/storage/music/music_img_folder/Ispy.png" />
                            </div>
                            <div class="col-md-3">
                                <img src="/storage/music/music_img_folder/Yellow_Hearts.png" />
                            </div>
                            <div class="col-md-3">
                                <img src="/storage/music/music_img_folder/Ispy.png" />
                            </div>
                            <div class="col-md-3">
                                <img src="/storage/music/music_img_folder/Yellow_Hearts.png" />
                            </div>
                        </div>
                         <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>



@endsection