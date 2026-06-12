<!DOCTYPE html>
<html>

<head>

<title>Transaksi Penjualan</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light d-flex flex-column min-vh-100">


@include('layout.navbar')



<main class="container mt-4 flex-grow-1">



<div class="card shadow">


<div class="card-body">



<div class="d-flex justify-content-between align-items-center mb-3">


<div>

<h2 class="fw-bold">

Transaksi Penjualan

</h2>


<p class="text-muted mb-0">

Kelola data penjualan komputer

</p>


</div>



<a href="/transaksi/create"

class="btn btn-primary">

+ Tambah Transaksi

</a>



</div>






@if(session('success'))


<div class="alert alert-success">

{{ session('success') }}

</div>


@endif






<table class="table table-hover table-bordered">





<thead class="table-dark">


<tr>

<th>No</th>
<th>Kasir</th>
<th>Produk</th>
<th>Jumlah</th>
<th>Total Harga</th>
<th>Tanggal</th>
<th>Aksi</th>

</tr>


</thead>






<tbody>





@forelse($transaksi as $t)





<tr>




<td>

{{ $loop->iteration }}

</td>





<td>


@if($t->user)

{{ $t->user->name }}

@else

-

@endif


</td>







<td>


@if($t->produk)

{{ $t->produk->nama_produk }}

@else

-

@endif


</td>






<td>


<span class="badge bg-primary">

{{ $t->jumlah }}

</span>


</td>






<td>


<b>

Rp {{ number_format($t->total_harga,0,',','.') }}

</b>


</td>






<td>

{{ $t->tanggal_transaksi }}

</td>






<td>




<a href="/transaksi/{{ $t->id }}/edit"

class="btn btn-warning btn-sm">

Edit

</a>







<form action="/transaksi/{{ $t->id }}"

method="POST"

class="d-inline">


@csrf

@method('DELETE')



<button

onclick="return confirm('Hapus transaksi ini?')"

class="btn btn-danger btn-sm">


Hapus

</button>



</form>





</td>





</tr>







@empty



<tr>

<td colspan="7" class="text-center">

Belum ada transaksi

</td>

</tr>




@endforelse






</tbody>




</table>





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