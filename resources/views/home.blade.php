@extends('layouts.main')

@section('container')        
    <h1>Home Page</h1>
    <a href="{{ URL::to('/') }}">Welcome</a>
    <a href="{{ URL::to('/about') }}">About</a>
    <a href="{{ URL::to('/home') }}">Home Page</a>
    <h2>This is my home page</h2>
@endsection    