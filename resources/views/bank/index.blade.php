@extends('layout/master')
@section('title', 'Daftar Bank')
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
            <form action="{{ route('bank.store') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-md-6">
                    <label class="form-label" for="nama_bank">Nama Bank</label>
                    <input type="text" id="nama_bank" name="nama_bank" value="{{ old('nama_bank') }}"
                        class="form-control @error('nama_bank') is-invalid @enderror" placeholder="Vendor" />
                    @error('nama_bank')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="no_rek">No rekening</label>
                    <input type="text" id="no_rek" name="no_rek" value="{{ old('no_rek') }}"
                        class="form-control @error('no_rek') is-invalid @enderror" placeholder="No rekening" />
                    @error('no_rek')
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
            <h5 class="card-title">@yield('title')</h5>
            <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Bank</th>
                        <th>No rekening</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach ($bank as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_bank }}</td>
                            <td>{{ $item->no_rek }}</td>
                            <td>
                                <a href="/bank/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                <form action="/bank/{{ $item->id }}" method="POST" class="d-inline">
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
