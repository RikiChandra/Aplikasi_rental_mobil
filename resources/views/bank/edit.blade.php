@extends('layout/master')
@section('title', 'Edit Daftar Bank')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bank.update', ['bank' => $bank->id]) }}" class="row g-3" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
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
@endsection
