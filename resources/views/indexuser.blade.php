@extends('layout')
@section('content')



    <div class="container-fluid p-5 bg-success text-white text-center">
        <h1>index User name </h1>
    </div>


    <div class="container" style="margin-left: 380px ; width: 3000px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> show User</div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAEM</th>
                        <th>email</th>
                        <th>CREATD AT </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $use)
                        <tr>
                            <th>{{$use->id}}</th>
                            <th> <a href="{{url('show/user/').'/' .$use->id}}">{{$use->name}}</a></th>
                            <th>{{$use->email}}</th>
                            <th>{{$use->created_at}} </th>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection('content')

