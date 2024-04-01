@extends('layouts.main')
@section('container')
    <main class="form-signin w-100 m-auto">
    <form action="/login" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal" >Please sign in</h1>

        <div class="form-floating">
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <small>Not registered? <a href="/register">Register Now!</a></small>
    </form>
    </main>
@endsection