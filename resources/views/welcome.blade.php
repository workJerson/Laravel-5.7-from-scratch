@extends('layout ')
@section('title', 'Dashboard')
@section('content')
    <h1>Welcome Blade</h1>

    <ul>
        @foreach ( $tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

    {!!$foo!!}
@endsection
