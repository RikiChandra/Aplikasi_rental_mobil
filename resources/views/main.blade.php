<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Rental Mobil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('home/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

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


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Rental Mobil</a>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Selamat Datang, {{ auth()->user()->nama }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @can('admin')
                                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2"></i> My
                                            Dashboard</a>
                                    </li>
                                @endcan
                                <li><a class="dropdown-item" href="/order"><i class="bi bi-card-checklist"></i> Order</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                                            Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link ms-auto {{ request()->is('login') ? 'active' : '' }}"><i
                                    class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                    @endauth
                </ul>

            </div>
        </nav>
    </header>

    <main>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('admin/assets/img/imgMain/slider1.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('admin/assets/img/imgMain/slider2.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('admin/assets/img/imgMain/slider3.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section class="py-5 text-center container">
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="d-flex justify-content-end mb-5">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form action="/" class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="search" value="{{ old('search') }}">
                                <button class="btn btn-outline-success" type="submit"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
                @if ($Main->count())
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="content">
                        @foreach ($Main as $item)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Mobil"
                                        height="300px">
                                    <div class="card-body">
                                        <p class="card-text">{{ $item->vendor->nama_vendor }}
                                            {{ $item->nama_mobil }}
                                        </p>
                                        {{-- <div class="d-flex justify-content-between align-items-center"> --}}
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Nama Vendor</th>
                                                        <td>{{ $item->vendor->nama_vendor }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Transmisi</th>
                                                        <td>{{ $item->transmisi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Harga Sewa</th>
                                                        <td>@currency($item->harga_sewa)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Denda</th>
                                                        <td>@currency($item->denda)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- </div> --}}
                                        <a href="/order/{{ $item->id }}" class="btn btn-primary">Rent
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center fs-4">Mobil Tidak Ditemukan</p>
                @endif
            </div>
            <div class="d-flex justify-content-center container-fluid mt-4">
                {{ $Main->links() }}
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for
                yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                    href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>


    <script src="{{ asset('home/assets/dist/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
