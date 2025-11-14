@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <card-header>
            <h5>{{ $title ?? '' }}</h5>
        </card-header>
    </div>
    <div class="card-body">
        <form action="{{route('user.store')}}"
        method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
@endsection
