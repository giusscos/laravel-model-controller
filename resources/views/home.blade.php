@extends('layouts.app')

@section('metaTitle', 'Home - Movies')

@section('content')
    <h1 class="go-to">
        Vai ai <a href="{{route('movies.index')}}" class="link-togo">movies</a>
    </h1>
@endsection