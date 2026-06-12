<!DOCTYPE html>
<html>

<head>

<title>Edit Transaksi</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light d-flex flex-column min-vh-100">


@include('layout.navbar')



<main class="container mt-4 flex-grow-1">



<div class="card shadow">


<div class="card-body">



<h2 class="fw-bold">

Edit Transaksi

</h2>





<form action="/transaksi/{{ $transaksi->id }}" method="POST">


@csrf

@method('PUT')






<label>

Produk

</label>




<select name="produk_id" class="form-control">






@foreach($produk as $p)





<option value="{{ $p->id }}"

{{ $p->id == $transaksi->produk_id ? 'selected' : '' }}

>


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

value="{{ $transaksi->jumlah }}">







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