@extends('auth.layouts')
@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Gallery Photo</h4>
                <a href="{{ route('gallery.create') }}" class="btn btn-success">Tambah Gambar</a>
            </div>
            <div class="card-body">
                <div class="row">
                    @if (count($galleries) > 0)
                    @foreach ($galleries as $gallery)
                    <div class="col-sm-3 mb-4">
                        <div class="gallery-item">
                            <a class="example-image-link" href="{{ asset('storage/posts_image/' . $gallery->picture) }}"
                                data-lightbox="roadtrip" data-title="{{ $gallery->description }}">
                                <img class="example-image img-fluid" src="{{ asset('storage/posts_image/' . $gallery->picture) }}"
                                    alt="image-1" />
                            </a>

                            <div class="gallery-buttons">
                                <form action="{{ route('gallery.edit', $gallery->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-primary btn-sm" type="submit"
                                        onclick="return confirm('Yakin mau melakukan edit')">Edit</button>
                                </form>

                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"
                                        onclick="return confirm('Yakin mau dihapus')">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 text-center">
                        <h3>Tidak ada data.</h3>
                    </div>
                    @endif
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
