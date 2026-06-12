<!DOCTYPE html>

<html>

<head>

<title>
Dashboard - Sistem Penjualan Komputer
</title>

<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">

</head>

<body class="bg-light d-flex flex-column min-vh-100">

@include('layout.navbar')

<main class="container mt-4 flex-grow-1">

    <!-- Welcome Card -->

    <div class="card shadow mb-4 border-0">

        <div class="card-body text-center">

            <h1 class="fw-bold text-primary">

                Dashboard

            </h1>

            <p class="mt-3">

                Selamat datang,

                <b>
                    {{ Auth::user()->name }}
                </b>

            </p>

            <span class="badge bg-primary fs-6">

                {{ Auth::user()->role }}

            </span>

            <p class="text-muted mt-3">

                Sistem Informasi Penjualan Toko Komputer

            </p>

        </div>

    </div>





    <!-- Statistik -->

    <div class="row">

        <!-- Kategori -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100 text-center">

                <div class="card-body">

                    <h5>Kategori</h5>

                    <h1 class="text-primary">

                        {{ $kategori }}

                    </h1>

                    <p class="text-muted">

                        Total kategori produk

                    </p>

                    <a href="/kategori"
                    class="btn btn-primary">

                        Masuk

                    </a>

                </div>

            </div>

        </div>





        <!-- Produk -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100 text-center">

                <div class="card-body">

                    <h5>Produk</h5>

                    <h1 class="text-success">

                        {{ $produk }}

                    </h1>

                    <p class="text-muted">

                        Total data produk

                    </p>

                    <a href="/produk"
                    class="btn btn-success">

                        Masuk

                    </a>

                </div>

            </div>

        </div>





        <!-- Transaksi -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100 text-center">

                <div class="card-body">

                    <h5>Transaksi</h5>

                    <h1 class="text-warning">

                        {{ $transaksi }}

                    </h1>

                    <p class="text-muted">

                        Total transaksi

                    </p>

                    <a href="/transaksi"
                    class="btn btn-warning">

                        Masuk

                    </a>

                </div>

            </div>

        </div>





        <!-- Pembayaran -->

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100 text-center">

                <div class="card-body">

                    <h5>Pembayaran</h5>

                    <h1 class="text-danger">

                        {{ $pembayaran }}

                    </h1>

                    <p class="text-muted">

                        Total pembayaran

                    </p>

                    <a href="/pembayaran"
                    class="btn btn-danger">

                        Masuk

                    </a>

                </div>

            </div>

        </div>

    </div>





    <!-- Menu Cepat -->

    <div class="card shadow border-0">

        <div class="card-body">

            <h4 class="mb-4">

                Menu Cepat

            </h4>

            <div class="row">

                <div class="col-md-3 mb-2">

                    <a href="/kategori"
                    class="btn btn-outline-primary w-100">

                        Kelola Kategori

                    </a>

                </div>

                <div class="col-md-3 mb-2">

                    <a href="/produk"
                    class="btn btn-outline-success w-100">

                        Kelola Produk

                    </a>

                </div>

                <div class="col-md-3 mb-2">

                    <a href="/transaksi"
                    class="btn btn-outline-warning w-100">

                        Kelola Transaksi

                    </a>

                </div>

                <div class="col-md-3 mb-2">

                    <a href="/pembayaran"
                    class="btn btn-outline-danger w-100">

                        Kelola Pembayaran

                    </a>

                </div>

            </div>

        </div>

    </div>

</main>





<footer class="bg-dark text-white text-center py-3 mt-auto">

    <p class="mb-0">

        © 2026 Sistem Informasi Penjualan Toko Komputer

    </p>

</footer>

</body>

</html>