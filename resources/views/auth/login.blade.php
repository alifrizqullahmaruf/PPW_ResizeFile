@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4>Login</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('authenticate') }}" method="post">
                    @csrf

                    <!-- Email Field -->
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Enter Your Email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection
