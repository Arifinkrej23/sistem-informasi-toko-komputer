<!DOCTYPE html>
<html>

<head>

<title>Data Produk</title>

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
Data Produk
</h2>


<p class="text-muted mb-0">
Kelola data produk komputer
</p>


</div>




<a href="/produk/create"
class="btn btn-primary">

+ Tambah Produk

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
<th>Kategori</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>

</tr>


</thead>




<tbody>



@forelse($produk as $p)



<tr>


<td>

{{ $loop->iteration }}

</td>




<td>


@if($p->kategori)

{{ $p->kategori->nama_kategori }}

@else

-

@endif


</td>





<td>

<b>

{{ $p->nama_produk }}

</b>

</td>






<td>

Rp {{ number_format($p->harga,0,',','.') }}

</td>






<td>


<span class="badge bg-success">

{{ $p->stok }}

</span>


</td>






<td>




<a href="/produk/{{ $p->id }}/edit"

class="btn btn-warning btn-sm">

Edit

</a>







<form action="/produk/{{ $p->id }}"

method="POST"

class="d-inline">


@csrf

@method('DELETE')




<button

onclick="return confirm('Hapus produk ini?')"

class="btn btn-danger btn-sm">


Hapus


</button>



</form>




</td>




</tr>







@empty



<tr>

<td colspan="6" class="text-center">

Belum ada data produk

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