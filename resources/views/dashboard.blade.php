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





<div class="card shadow mb-4">


<div class="card-body text-center">



<h1 class="fw-bold">

Dashboard

</h1>




<p class="mt-3">

Selamat datang

<b>
{{ Auth::user()->name }}
</b>

</p>



<span class="badge bg-primary">

{{ Auth::user()->role }}

</span>



<p class="text-muted mt-3">

Silahkan pilih menu untuk mengelola sistem penjualan komputer

</p>




</div>


</div>








<div class="row">






<div class="col-md-3 mb-4">


<div class="card shadow h-100 text-center">


<div class="card-body">



<h4>

Kategori

</h4>


<p class="text-muted">

Kelola kategori produk

</p>




<a href="/kategori"
class="btn btn-primary">


Masuk


</a>




</div>


</div>


</div>









<div class="col-md-3 mb-4">


<div class="card shadow h-100 text-center">


<div class="card-body">



<h4>

Produk

</h4>


<p class="text-muted">

Kelola data komputer

</p>




<a href="/produk"
class="btn btn-success">


Masuk


</a>




</div>


</div>


</div>









<div class="col-md-3 mb-4">


<div class="card shadow h-100 text-center">


<div class="card-body">



<h4>

Transaksi

</h4>


<p class="text-muted">

Kelola penjualan

</p>




<a href="/transaksi"
class="btn btn-warning">


Masuk


</a>




</div>


</div>


</div>









<div class="col-md-3 mb-4">


<div class="card shadow h-100 text-center">


<div class="card-body">



<h4>

Pembayaran

</h4>


<p class="text-muted">

Kelola pembayaran

</p>




<a href="/pembayaran"
class="btn btn-danger">


Masuk


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