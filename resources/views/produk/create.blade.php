<!DOCTYPE html>

<html>

<head>

<title>Tambah Produk</title>

<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body>


@include('layout.navbar')



<div class="container mt-4">


<h2>Tambah Produk</h2>



<form action="/produk"
method="POST">


@csrf



<label>Kategori</label>


<select name="kategori_id"
class="form-control">


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
name="nama_produk"
class="form-control">





<label class="mt-3">
Harga
</label>


<input
type="number"
name="harga"
class="form-control">





<label class="mt-3">
Stok
</label>


<input
type="number"
name="stok"
class="form-control">





<label class="mt-3">
Deskripsi
</label>


<textarea
name="deskripsi"
class="form-control">
</textarea>




<button class="btn btn-success mt-3">

Simpan

</button>



</form>



</div>


</body>


</html>