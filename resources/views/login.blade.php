@extends('master')

@section('title', 'Login Page')

@section('content')
    <div class="card mt-5" style="width: 500px">
        <div class="card-header text-center">
            <h4 class="card-title">Login Page</h4>
        </div>
        <form action="/login" method="post">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="card-footer">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Login</button>
                    <a href="/register" class="btn btn-secondary">Register</a>
                </div>
            </div>
        </form>
    </div>
@endsection
