@extends('layouts.main')

@section('title', 'Login page')

@section('content')

    <div class="alert alert-info" role="alert">
        Thank you for registering! A link has been sent to your email.
    </div>

    <div>
        Didn't receive an email?
        <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-link ps-0">Send link</button>
        </form>
    </div>

@endsection
