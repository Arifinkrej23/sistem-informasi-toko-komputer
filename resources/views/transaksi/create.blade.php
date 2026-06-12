<!DOCTYPE html>
<html>

<head>

<title>Tambah Transaksi</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light d-flex flex-column min-vh-100">


@include('layout.navbar')



<main class="container mt-4 flex-grow-1">



<div class="card shadow">


<div class="card-body">


<h2 class="fw-bold">

Tambah Transaksi

</h2>





<form action="/transaksi" method="POST">


@csrf





<label>

Produk

</label>



<select name="produk_id" class="form-control">



<option value="">

-- Pilih Produk --

</option>





@foreach($produk as $p)



<option value="{{ $p->id }}">


{{ $p->nama_produk }}

-

Rp {{ number_format($p->harga,0,',','.') }}


</option>





@endforeach




</select>







<label class="mt-3">

Jumlah

</label>




<input

type="number"

name="jumlah"

class="form-control"

placeholder="Jumlah beli">







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