@extends('layout/master')
@section('title', 'Daftar User')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title"><a href="user/create" class="btn btn-dark">Add</a></h5>
            <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Alamat Email</th>
                        <th>Nama Lengkap</th>
                        <th>No telpon</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach ($pengguna as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <a href="" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                                <a href="" class="btn btn-warning"><i class='bx bxs-edit'></i></a>
                                <form action="{{ route('user.destroy', ['user' => $item->id]) }}" method="POST"
                                    class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
