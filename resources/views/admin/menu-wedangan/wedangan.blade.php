@extends('admin.adminhome')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Tabel Wedangan</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Wedangan</h6>
                <a href="{{ route('admin.wedangan.create') }}" class="btn btn-primary mt-2">Tambah wedangan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama wedangan</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wedangans as $wedangan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $wedangan->nama }}</td>
                                    <td>{{ $wedangan->deskripsi }}</td>
                                    <td>
                                        <p class="harga">Rp {{ number_format($wedangan->harga, 0, ',', '.') }}</p>
                                    </td>
                                    <td><img src="{{ asset('images/' . $wedangan->gambar) }}" alt="{{ $wedangan->nama }}"
                                            width="50"></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.wedangan', ['id' => $wedangan->id]) }}"
                                                class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <form action="{{ route('delete.wedangan', ['id' => $wedangan->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus wedangan ini?')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
