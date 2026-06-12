<!DOCTYPE html>

<html>

<head>

<title>Edit Kategori</title>

<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body>


@include('layout.navbar')


<div class="container mt-4">


<h2>Edit Kategori</h2>


<form action="/kategori/{{ $kategori->id }}"
method="POST">


@csrf

@method('PUT')


<input
class="form-control mb-3"
name="nama_kategori"
value="{{ $kategori->nama_kategori }}">



<textarea
class="form-control mb-3"
name="deskripsi">{{ $kategori->deskripsi }}</textarea>



<button class="btn btn-primary">

Update

</button>


</form>


</div>


</body>

</html>