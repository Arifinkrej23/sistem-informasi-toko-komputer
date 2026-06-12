<!DOCTYPE html>
<html>

<head>

<title>Tambah Produk</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light d-flex flex-column min-vh-100">


@include('layout.navbar')



<main class="container mt-4 flex-grow-1">



<div class="card shadow">


<div class="card-body">


<h2 class="fw-bold">
Tambah Produk
</h2>




<form action="/produk" method="POST">

@csrf



<label>
Kategori
</label>


<select name="kategori_id" class="form-control">


<option value="">
-- pilih kategori --
</option>



@foreach($kategori as $k)


<option value="{{ $k->id }}">

{{ $k->nama_kategori }}

</option>


@endforeach



</select>





<label class="mt-3">
Nama Produk
</label>


<input
type="text"
name="nama_produk"
class="form-control"
placeholder="Nama produk">






<label class="mt-3">
Harga
</label>


<input
type="number"
name="harga"
class="form-control"
placeholder="Harga">






<label class="mt-3">
Stok
</label>


<input
type="number"
name="stok"
class="form-control"
placeholder="Stok">






<label class="mt-3">
Deskripsi
</label>


<textarea
name="deskripsi"
class="form-control"
placeholder="Deskripsi"></textarea>





<button class="btn btn-primary mt-3">

Simpan

</button>



</form>



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