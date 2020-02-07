@extends('layaout')

@section('content')
    <h1>{{$title}}</h1>
    <ul>
        @foreach($UsersList as $users)
            <li>{{$users}}</li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    @parent
    <h1>barra persolanilidad desde users</h1>
@endsection
