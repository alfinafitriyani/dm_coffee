@extends('admin.adminhome')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit Snack</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('admin.menu-snack.update', ['id' => $snack->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Snack</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $snack->nama }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $snack->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        <img src="{{ asset('images/' . $snack->gambar) }}" alt="{{ $snack->nama }}" width="100">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $snack->harga }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
