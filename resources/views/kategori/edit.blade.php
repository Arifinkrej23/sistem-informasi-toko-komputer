<!DOCTYPE html>
<html>
<head>
<title>Edit Kategori</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

@include('layout.navbar')

<div class="container mt-4">

<div class="card shadow">

<div class="card-body">

<h2>Edit Kategori</h2>

<form action="/kategori/{{ $kategori->id }}" method="POST">

@csrf
@method('PUT')

<label>Nama Kategori</label>

<input 
type="text"
class="form-control mb-3"
name="nama_kategori"
value="{{ $kategori->nama_kategori }}">


<label>Deskripsi</label>

<textarea
class="form-control mb-3"
name="deskripsi">{{ $kategori->deskripsi }}</textarea>


<button class="btn btn-warning">

Update

</button>


</form>

</div>

</div>

</div>

</body>
</html>