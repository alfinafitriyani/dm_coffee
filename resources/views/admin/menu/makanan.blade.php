@extends('admin.adminhome')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Tabel Makanan</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Makanan</h6>
                <a href="{{ route('admin.makanan.create') }}" class="btn btn-primary mt-2">Tambah Makanan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Makanan</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($makanans as $makanan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('images/' . $makanan->gambar) }}" alt="{{ $makanan->nama }}" width="50"></td>
                                    <td>{{ $makanan->nama }}</td>
                                    <td>{{ $makanan->deskripsi }}</td>
                                    <td><p class="harga">Rp {{ number_format($makanan->harga, 0, ',', '.') }}</p></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.makanan', ['id' => $makanan->id]) }}" class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <form action="{{ route('delete.makanan', ['id' => $makanan->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus makanan ini?')">Hapus</button>
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
