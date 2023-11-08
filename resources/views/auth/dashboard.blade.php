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
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->photo)
                            <img src="{{ asset('storage/' . $user->photo) }}" width="150px" class="img-thumbnail">
                        @else
                            <p>Tidak ada photo</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit', $user) }}" class="btn btn-primary">Edit Photo</a>

                        <form method="POST" action="{{ route('destroy', $user)">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete Photo</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
