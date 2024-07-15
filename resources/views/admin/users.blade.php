@extends('admin.adminhome')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Tabel Users</h6>
            </div>
            <section class="intro">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                                    <div class="card-body ">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">User Tipe</th>
                                                        <th scope="col">Edit</th>
                                                        <th scope="col">Hapus</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>
                                                                @if ($user->usertype == 1)
                                                                    Admin
                                                                @elseif ($user->usertype == 0)
                                                                    User
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('edit.user', ['id' => $user->id]) }}"
                                                                    class="btn btn-sm btn-primary">Edit</a>
                                                            </td>
                                                            <td>
                                                                @if (Auth::user()->usertype == '1')
                                                                    @if ($user->usertype == '0')
                                                                        <a href="{{ route('delete.user', ['id' => $user->id]) }}"
                                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')"
                                                                            class="btn btn-sm btn-danger">Hapus</a>
                                                                    @else
                                                                        <span class="text-muted"><i class="fas fa-ban"></i>
                                                                        </span>
                                                                    @endif
                                                                @endif
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>
@endsection
