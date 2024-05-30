@extends('layouts.main')

@section('title', 'Register page')

@section('content')
    <div class="row">

        <div class="col-md-6 offs">
            <h1 class="h2">Register form</h1>

            <form action="{{route('user.store')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">You name</label>
                    <input type="text"
                           name="name"
                           class="form-control {{ $errors->has('name') ? 'is-invalid' : ($errors->any() ? 'is-valid' : '') }}"
                           id="name"
                           placeholder="you name"
                           value="{{old('name')}}">

                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email"
                           name="email"
                           class="form-control {{ $errors->has('email') ? 'is-invalid' : ($errors->any() ? 'is-valid' : '') }}"
                           id="email"
                           value="{{old('email')}}"
                           placeholder="name@example.com">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                           name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           id="password"
                           placeholder="Password (min 6 chars)">

                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password"
                           name="password_confirmation"
                           class="form-control @error('password_confirmation') is-invalid @enderror"
                           id="password_confirmation"
                           placeholder="Confirm Password (min 4 chars)">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{route('login')}}" class="ms-3">Already have an account?</a>

            </form>
        </div>
    </div>

@endsection

