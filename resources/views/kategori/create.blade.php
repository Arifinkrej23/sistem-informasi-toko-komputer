<!DOCTYPE html>

<html>

<head>

<title>Tambah Kategori</title>

<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body>


@include('layout.navbar')


<div class="container mt-4">


<h2>Tambah Kategori</h2>


<form action="/kategori"
method="POST">

@csrf


<input 
class="form-control mb-3"
name="nama_kategori"
placeholder="Nama kategori">



<textarea
class="form-control mb-3"
name="deskripsi"
placeholder="Deskripsi"></textarea>



<button class="btn btn-success">

Simpan

</button>


</form>


</div>


</body>

</html>