@extends('admin.adminhome')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit Galeri</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('admin.galeri.update', ['id' => $galeri->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        <img src="{{ asset('images/' . $galeri->gambar) }}" alt="{{ $galeri->nama }}" width="100">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
