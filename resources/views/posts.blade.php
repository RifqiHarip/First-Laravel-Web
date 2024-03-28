@extends('layouts.main')

@section('container')        
    <h1>Blog Post Page</h1>

    @foreach ($posts as $post)
    <article>
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
    
@endsection    