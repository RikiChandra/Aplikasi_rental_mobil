@extends('layout/master')
@section('title', 'Daftar Vendor')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('vendor.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-md-6">
                    <label class="form-label" for="nama_vendor">Vendor</label>
                    <input type="text" id="nama_vendor" name="nama_vendor" value="{{ old('nama_vendor') }}"
                        class="form-control @error('nama_vendor') is-invalid @enderror" placeholder="Vendor" />
                    @error('nama_vendor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">Vendor Mobil</h5>
            <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Vendor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach ($vendor as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_vendor }}</td>
                            <td>
                                <a href="/vendor/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                <form action="/vendor/{{ $item->id }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda ingin menghapus?')"><i
                                            class='bx bx-trash'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
