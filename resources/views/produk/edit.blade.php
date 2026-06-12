<!DOCTYPE html>
<html>

<head>

<title>Edit Produk</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light d-flex flex-column min-vh-100">


@include('layout.navbar')



<main class="container mt-4 flex-grow-1">



<div class="card shadow">


<div class="card-body">



<h2 class="fw-bold">

Edit Produk

</h2>




<form action="/produk/{{ $produk->id }}" method="POST">


@csrf

@method('PUT')





<label>

Kategori

</label>



<select name="kategori_id" class="form-control">



<option value="">

-- pilih kategori --

</option>




@foreach($kategori as $k)



<option value="{{ $k->id }}"

{{ $produk->kategori_id == $k->id ? 'selected' : '' }}

>


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

value="{{ $produk->nama_produk }}">







<label class="mt-3">

Harga

</label>



<input

type="number"

name="harga"

class="form-control"

value="{{ $produk->harga }}">







<label class="mt-3">

Stok

</label>



<input

type="number"

name="stok"

class="form-control"

value="{{ $produk->stok }}">








<label class="mt-3">

Deskripsi

</label>



<textarea

name="deskripsi"

class="form-control">{{ $produk->deskripsi }}</textarea>








<button class="btn btn-warning mt-3">

Update

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