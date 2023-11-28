@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        Hello, {{ auth() -> user() -> name }}
        <p>Your trial will expire on {{ auth() -> user() -> user_trial }}</p>
        {{-- {{ auth() -> user() -> email }} --}}

        <div class="col-md-3">
            <div class="card-counter primary">
                <p class="text-center mt-3 primary lead">User Profile</p>
                <button class="btn btn-primary float-end">View</button>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter primary">
                <p class="text-center mt-3 primary lead">Post Job</p>
                <button class="btn btn-primary float-end">View</button>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter primary">
                <p class="text-center mt-3 primary lead">All Jobs</p>
                <button class="btn btn-primary float-end">View</button>
            </div>
        </div>
    </div>
</div>

@endsection