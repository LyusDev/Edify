@extends('layouts.app')

@section('content')
@if(isset($flag)&&$flag==1)
<div class="alert alert-success">add recored successfull</div>
@endif
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>All Music</h3>
                </div>

                <div class="card-body">
                    <musiclist class="p-5"/>
                </div>
            </div>
        </div>


    </div>
</div>



@endsection