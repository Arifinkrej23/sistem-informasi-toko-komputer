<!DOCTYPE html>

<html>

<head>

<title>Tambah Transaksi</title>


<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">


</head>


<body>


@include('layout.navbar')



<div class="container mt-4">


<h2>Tambah Transaksi</h2>




<form action="/transaksi"
method="POST">


@csrf




<label>
Produk
</label>


<select name="produk_id"
class="form-control">


<option value="">
-- Pilih Produk --
</option>



@foreach($produk as $p)


<option value="{{ $p->id }}">


{{ $p->nama_produk }}

-

Rp {{ number_format($p->harga) }}


</option>


@endforeach



</select>




<label class="mt-3">
Jumlah
</label>


<input

type="number"

name="jumlah"

class="form-control">





<button class="btn btn-success mt-3">

Simpan

</button>



</form>



</div>



</body>

</html>