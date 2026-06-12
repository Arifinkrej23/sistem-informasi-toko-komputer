<!DOCTYPE html>

<html>

<head>

<title>
Kategori Produk
</title>


<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">


</head>




<body class="bg-light d-flex flex-column min-vh-100">



@include('layout.navbar')







<main class="container mt-4 flex-grow-1">





<div class="card shadow">



<div class="card-body">





<div class="d-flex justify-content-between align-items-center mb-3">



<div>

<h2 class="fw-bold">

Kategori Produk

</h2>


<p class="text-muted mb-0">

Kelola kategori barang komputer

</p>

</div>





<a href="/kategori/create"
class="btn btn-primary">


+ Tambah Kategori


</a>




</div>








@if(session('success'))


<div class="alert alert-success">


{{ session('success') }}


</div>


@endif







<div class="table-responsive">



<table class="table table-hover table-bordered">





<thead class="table-dark">


<tr>


<th>No</th>

<th>Nama Kategori</th>

<th>Deskripsi</th>

<th width="200">
Aksi
</th>


</tr>


</thead>






<tbody>




@forelse($kategori as $k)



<tr>



<td>

{{ $loop->iteration }}

</td>




<td>


<b>

{{ $k->nama_kategori }}

</b>


</td>





<td>


{{ $k->deskripsi ?? '-' }}


</td>






<td>



<a href="/kategori/{{ $k->id }}/edit"

class="btn btn-warning btn-sm">


Edit


</a>







<form action="/kategori/{{ $k->id }}"

method="POST"

class="d-inline">


@csrf

@method('DELETE')



<button

onclick="return confirm('Hapus kategori ini?')"

class="btn btn-danger btn-sm">


Hapus


</button>



</form>




</td>





</tr>






@empty




<tr>


<td colspan="4"
class="text-center">


Belum ada data kategori


</td>


</tr>





@endforelse





</tbody>






</table>




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