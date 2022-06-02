


@extends('layouts.app')
@section('content')
<h1 class="text"> STUDENT:{{$drive->id}} </h1>
<div class="container col-md-6">
    <div class="card">
        <img src="{{asset("upload/$drive->file")}}" alt="" class="img-top">
        <div class="card-body">
            <h5 class="create">STUDENT NAME :{{$drive->title}} </h5>
            <p class="create">STUDENT ACTIVITY :{{$drive->description}}</p>

        </div>
        <a href="{{route("drives.download",$drive->id)}} " class="btn btn-info">DOWNLOAD<i class="fas fa-download"></i></a>
    </div>
</div>
@endsection