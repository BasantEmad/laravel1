@extends('layouts.app')
@section('content')
<h1 class="text">List STUDENT ACTIVITES </h1>
@if (Session :: has('done'))
<div class="alert alert-info mx-auto w-50">
    <h5>{{Session::get('done')}}</h5>

</div>
    
@endif
<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <table class="table table-info">
                <tr>
                    <th class="create">ID</th>
                    <th class="create">TITILE</th>
                    <th class="create" colspan="3">ACTION</th>
                </tr>
                @foreach ($drives as $data)
                <tr>
                    <th class="create">{{$data->id}}</th>
                    <th class="create" >{{$data->title}}</th>
                    <th ><a href="{{route('drives.show',$data->id)}}"><i class="fas fa-eye"></i></a></th>
                    <th class="create2" ><a href="{{route('drives.edit',$data->id)}}"><i class="fas fa-edit"></i></a></th>
                    <th class="create3"><a href="{{route('drives.destroy',$data->id)}}"><i class="fas fa-trash-alt"></i></a></th>
                </tr>
                    
                @endforeach

            </table>

        </div>
    </div>
</div>
@endsection