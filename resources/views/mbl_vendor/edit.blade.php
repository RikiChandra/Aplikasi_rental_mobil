@extends('layout/master')
@section('title', 'Edit Vendor')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('vendor.update', ['vendor' => $vendor->id]) }}" class="row g-3" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="col-12 col-md-6">
                    <label class="form-label" for="nama_vendor">Vendor</label>
                    <input type="text" id="nama_vendor" name="nama_vendor" value="{{ old('nama_vendor') }}"
                        class="form-control @error('nama_vendor') is-invalid @enderror" placeholder="Vendor"
                        value="{{ old('nama_vendor') ?? $vendor->nama_vendor }}">
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
@endsection
