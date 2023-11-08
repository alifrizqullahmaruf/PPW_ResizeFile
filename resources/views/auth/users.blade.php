@extends('auth.layouts')

@section('content')

<div class="container mt-5">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userss as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><img src="{{ asset('storage/' . $user->photo) }}" width="150px" class="img-thumbnail"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
