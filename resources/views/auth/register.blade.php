@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-7">

        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4>R E G I S T E R</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- Name Field -->
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Enter Full Name" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
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

                    <!-- Photo Field -->
                    <div class="form-group row">
                        <label for="photo" class="col-md-3 col-form-label text-md-right">Photo</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control-file @error('photo') is-invalid @enderror"
                                id="photo" name="photo" value="{{ old('photo') }}">
                            @error('photo')
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
                                id="password" name="password" placeholder="Create Your Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-3 col-form-label text-md-right">Confirm
                            Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group row mt-4">
                        <div class="col-md-9 offset-md-3">
                            <input type="submit" class="btn btn-primary btn-block" value="R E G I S T R A S I">
                        </div>
                    </div>

                    <!-- Login Link -->
                    <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                            <p class="isi_peringatan mt-2 text-center">Already have access to the website portfolio?
                                <span class="text-primary"><a href="auth.login">Log In</a></span></p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
