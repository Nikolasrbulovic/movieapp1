@extends('layout.default')
@section('content')
    @foreach ($movies as $movie )
        @include('singlemovie')
    @endforeach
@endsection