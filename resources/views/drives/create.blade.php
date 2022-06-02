@extends('layouts.app')
@section('content')
<h1 class="text">ADD STUDENT ACTIVITES  </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <form action="{{route('drives.store')}}"method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="create" for="">STUDENT NAME</label>
                    <input type="text" name="title"class="form-control">
                </div>

                <div class="form-group">
                    <label class="create" for="">STUDENT ACTIVITY  </label>
                    <input type="text" name="description"class="form-control">
                </div>

                <div class="form-group">
                    <label class="create" for="">Upload File (STUDENT PICTURE) </label>
                    <input type="file" name="inputFile"class="form-control">
                </div>
                <button class="btn btn-info">SEND File</button>

            </form>

            
        </div>
    </div>
</div>
@endsection