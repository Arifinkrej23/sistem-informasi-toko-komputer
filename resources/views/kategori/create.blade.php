<!DOCTYPE html>
<html>
<head>
<title>Tambah Kategori</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body class="bg-light">

@include('layout.navbar')

<div class="container mt-4">

<div class="card shadow">

<div class="card-body">

<h2>Tambah Kategori</h2>

<form action="/kategori" method="POST">

@csrf

<label>Nama Kategori</label>
<input type="text" name="nama_kategori" class="form-control mb-3" placeholder="Nama kategori">

<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control mb-3" placeholder="Deskripsi"></textarea>

<button class="btn btn-primary">
Simpan
</button>

</form>

</div>

</div>

</div>

</body>
</html>