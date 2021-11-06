@extends('layout')
@section('content')

    <div class="container-fluid p-5 bg-success text-white text-center">
        <h1>shwo User Information </h1>
    </div>

    <div class="container card" style="width: 630px;">
        <div class="container card-header" style="width: 600px;">
            User Information
        </div>
        <ul class="list-group list-group-flush">
            <table>
                <tr><th>Id</th><th><li class="list-group-item">{{$user->id}}</li></th></tr>
                <tr><th>Name</th><th><li class="list-group-item">{{$user->name}}</li></th></tr>
                <tr><th>Email</th><th><li class="list-group-item">{{$user->email}}</li></th></tr>
            </table>
        </ul>
    </div>


@endsection('content')
