@extends('layout/master')
@section('title', 'Daftar Mobil')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

    <!-- Multilingual -->
    <h5 class="card-header"><a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewAddress">
            Add </a></h5>
    <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="address-title">Masukkan Daftar Mobil Baru</h3>
                        <p class="address-subtitle">Add new list car</p>
                    </div>
                    <form action="{{ route('mobil.store') }}" class="row g-3" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="transmisi">Nama Vendor</label>
                            <select id="vendor_id" name="vendor_id"
                                class="select2 form-select @error('vendor_id') is-invalid @enderror"
                                data-allow-clear="true">
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
                                class="form-control @error('nama_mobil') is-invalid @enderror" placeholder="Nama Mobil" />
                            @error('nama_mobil')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="transmisi">Transmisi</label>
                            <select id="transmisi" name="transmisi"
                                class="select2 form-select @error('transmisi') is-invalid @enderror"
                                data-allow-clear="true">
                                <option value="">Pilih</option>
                                <option value="Manual">Manual</option>
                                <option value="Matic">Matic</option>
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
                                class="form-control @error('harga_sewa') is-invalid @enderror" placeholder="Harga Sewa" />
                            @error('harga_sewa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="denda">Denda</label>
                            <input type="number" id="denda" name="denda"
                                class="form-control @error('denda') is-invalid @enderror " placeholder="Denda" />
                            @error('denda')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <img class="img-fluid" style="visibility:hidden" id="prview" src="" />
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
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Simpan</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row row-cols-1 row-cols-md-3 g-4 mb-5"> --}}
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">@yield('title')</h5>
            <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Vendor</th>
                        <th>Nama Mobil</th>
                        <th>Transmisi</th>
                        <th>Harga Sewa</th>
                        <th>Denda</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <tbody>
                    @foreach ($daftarmobil as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->vendor->nama_vendor }}</td>
                            <td>{{ $item->nama_mobil }}</td>
                            <td>{{ $item->transmisi }}</td>
                            <td>@currency($item->harga_sewa)</td>
                            <td>@currency($item->denda)</td>
                            <td>
                                <a href="/mobil/{{ $item->id }}/edit" class="btn btn-warning"><i
                                        class='bx bxs-edit'></i></a>
                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <form action="/mobil/{{ $item->id }}" method="POST" class="d-inline">
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
