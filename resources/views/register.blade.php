@extends('master')

@section('title', 'Registration Page')

@section('content')
    <div class="card mt-5" style="width: 500px">
        <div class="card-header text-center">
            <h4 class="card-title">Registration Form</h4>
        </div>
        <form action="/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="mb-3 me-5">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input class="form-control" type="file" id="photo" name="photo">
                </div>
            </div>
            <div class="card-footer">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Register</button>
                    <a href="/login" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
