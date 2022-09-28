<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    <link rel="stylesheet" href="{{ asset('home/assets/dist/css/bootstrap-datepicker.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('home/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    {{-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico"> --}}
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="row g-5 mt-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>

                    </h4>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/' . $order->gambar) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $order->vendor->nama_vendor }} {{ $order->nama_mobil }}
                            </h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Nama Vendor</th>
                                            <td>{{ $order->vendor->nama_vendor }}</td>
                                        </tr>
                                        <tr>
                                            <th>Transmisi</th>
                                            <td>{{ $order->transmisi }}</td>
                                        </tr>
                                        <tr>
                                            <input type="hidden" id="price_car" name="harga_sewa"
                                                value="{{ $order->harga_sewa }}">
                                            <input type="hidden" name="nama_mobil" value="{{ $order->nama_mobil }}">
                                            <input type="hidden" name="denda" value="{{ $order->denda }}">
                                            <th>Harga Sewa</th>
                                            <td>@currency($order->harga_sewa)</td>
                                        </tr>
                                        <tr>
                                            <th>Denda</th>
                                            <td>@currency($order->denda)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h3><a href="/" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a></h3>
                    <h4 class="mb-3">Pembayaran</h4>
                    <form class="needs-validation" novalidate action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name_lengkap') is-invalid @enderror"
                                    id="firstName" placeholder="" value="{{ auth()->user()->nama }}" required
                                    readonly>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Email</label>
                                <input type="email" class="form-control" id="lastName" placeholder=""
                                    value="{{ auth()->user()->email }}" required readonly>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="address" class="form-label">No Telpn</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    id="address" placeholder="1234 Main St" required
                                    value="{{ auth()->user()->no_hp }}">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">ALamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    id="address" placeholder="1234 Main St" required
                                    value="{{ auth()->user()->alamat }}">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label" for="transmisi">Metode pembayaran</label>
                                <select id="bank_id" name="bank_id"
                                    class="select2 form-select @error('bank_id') is-invalid @enderror"
                                    data-allow-clear="true">
                                    @foreach ($bank as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_bank }}</option>
                                    @endforeach
                                </select>
                                @error('bank_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label>Lease Date</label>
                                <input required type="date"
                                    class="form-control @error('lease_date') is-invalid @enderror" id="date1"
                                    name="lease_date">
                            </div>
                            <div class="col-md-6">
                                <label>Return Date</label>
                                <input required type="date"
                                    class="form-control @error('return_date') is-invalid @enderror" id="date2"
                                    name="return_date">
                            </div>

                            <div class="col-md-6">
                                <a style="cursor: pointer;" onclick="get_summary()"
                                    class="btn btn-block btn-info text-white">Cek Harga</a>
                            </div>

                            <div class="col-lg-8 mb-5" id="preview_info" style="display: none">
                                <p>Preview Summary Order Car</p>
                                <!--  <form action="#" method="post"> -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Range Day</label>
                                        <input readonly type="text" id="range_day" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Amount</label>
                                        <input readonly type="text" id="amount_fix" name="amount"
                                            class="form-control @error('amount') is-invalid @enderror">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="w-100 btn btn-primary btn-lg mt-2" type="submit">Bayar</button>
                    </form>
                </div>
            </div>



    </div>
    </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017–2021 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
    </div>
    <script src="{{ asset('home/assets/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('home/assets/form-validation.js') }}"></script>
    <script type="text/javascript" language="JavaScript">
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        }

        function get_summary() {
            $('#preview_info').show();
            var date1 = document.getElementById("date1").value;
            var date2 = document.getElementById("date2").value;
            const diffDays = (date, otherDate) => Math.ceil(Math.abs(date - otherDate) / (1000 * 60 * 60 * 24));
            // Example
            var price = document.getElementById("price_car").value;
            var result = diffDays(new Date(date1), new Date(date2)); // 1839
            $('#range_day').val(result + ' ' + 'Days');
            var amount = result * price;
            $('#amount_fix').val(numberWithCommas(amount));
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>

</html>
