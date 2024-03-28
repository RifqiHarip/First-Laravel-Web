@extends('layouts.main')
@section('container')
    <main class="form-registration w-100 m-auto">
    <form action="/register" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal" >Please Register</h1>

        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="name"  is-invalid placeholder="Name" autofocus required>
            <label for="name">Name</label>
        </div>

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
            <label for="email">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
            <label for="password">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        <small>Already have an account? <a href="/login">Sign in here!</a></small>
        
    </form>
    </main>
@endsection