@extends('master')

@section('title', 'Personal Information')

@section('content')
    <div class="card mt-5" style="width: 500px">
        <div class="card-header text-center">
            <h4 class="card-title">Personal Information</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-center">
            <img src="{{ asset('storage/'.auth()->user()->photo) }}" alt="">
            <div class="mb-3 row">
                <label class="col-sm-5 col-form-label">Firstname</label>
                <div class="col-sm-5">
                    <input type="text" readonly class="form-control-plaintext" name="firstname" value="{{ auth()->user()->firstname }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-5 col-form-label">Last Name</label>
                <div class="col-sm-5">
                    <input type="text" readonly class="form-control-plaintext" name="lastname" value="{{ auth()->user()->lastname }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-5 col-form-label">Phone Number</label>
                <div class="col-sm-5">
                    <input type="text" readonly class="form-control-plaintext" name="phone" value="{{ auth()->user()->phone }}">
                </div>
            </div>
            <form action="/logout" method="post">
                @csrf
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
