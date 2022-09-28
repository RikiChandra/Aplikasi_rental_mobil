@extends('layout/master')
@section('title', 'Edit Data Mobil')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">@yield('title')</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('mobil.update', ['mobil' => $mobil->id]) }}" class="row g-3"
                        method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="transmisi">Nama Vendor</label>
                            <select id="vendor_id" name="vendor_id"
                                class="select2 form-select @error('vendor_id') is-invalid @enderror" data-allow-clear="true">
                                @foreach ($vendor as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_vendor }}</option>
                                @endforeach
                            </select>
                            @error('vendor_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="nama_mobil">Nama Mobil</label>
                            <input type="text" id="nama_mobil" name="nama_mobil"
                                value="{{ old('nama_mobil') ?? $mobil->nama_mobil }}"
                                class="form-control @error('nama_mobil') is-invalid @enderror" placeholder="Nama Mobil" />
                            @error('nama_mobil')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="transmisi">Transmisi</label>
                            <select id="transmisi" name="transmisi" value="{{ old('transmisi') ?? $mobil->transmisi }}"
                                class="select2 form-select @error('transmisi') is-invalid @enderror"
                                data-allow-clear="true">
                                <option value="">Pilih</option>
                                <option value="Manual" @if ($mobil->transmisi == 'Manual') selected @endif>Manual</option>
                                <option value="Matic" @if ($mobil->transmisi == 'Matic') selected @endif>Matic</option>
                            </select>
                            @error('transmisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="harga_sewa">Harga Sewa</label>
                            <input type="number" id="harga_sewa" name="harga_sewa"
                                value="{{ old('harga_sewa') ?? $mobil->harga_sewa }}"
                                class="form-control @error('harga_sewa') is-invalid @enderror" placeholder="Harga Sewa" />
                            @error('harga_sewa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="denda">Denda</label>
                            <input type="number" id="denda" name="denda" value="{{ old('denda') ?? $mobil->denda }}"
                                class="form-control @error('denda') is-invalid @enderror " placeholder="Denda" />
                            @error('denda')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="hidden" name="oldImage" value="{{ $mobil->gambar }}">
                        @if ($mobil->gambar)
                            <div class="col-lg-6">
                                <img src=" {{ asset('storage/' . $mobil->gambar) }}" class="img-fluid"
                                    id="prview" />
                            </div>
                        @else
                            <div class="col-lg-6">
                                <img class="img-fluid" style="visibility:hidden" id="prview" src="" />
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Gambar</label>
                            <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="imgInp"
                                name="gambar">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-warning me-sm-3 me-1">Update</button>
                            <a href="{{ route('mobil.index') }}" class="btn btn-label-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
