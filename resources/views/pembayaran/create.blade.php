<!DOCTYPE html>

<html>

<head>

<title>Tambah Pembayaran</title>

<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body>


@include('layout.navbar')



<div class="container mt-4">


<h2>Tambah Pembayaran</h2>




<form action="/pembayaran"
method="POST">


@csrf





<label>
Transaksi
</label>


<select name="transaksi_id"
class="form-control">


<option>
-- Pilih Transaksi --
</option>



@foreach($transaksi as $t)


<option value="{{ $t->id }}">


Transaksi #{{ $t->id }}

-
Rp {{ number_format($t->total_harga) }}


</option>


@endforeach



</select>






<label class="mt-3">
Metode Pembayaran
</label>



<select name="metode_pembayaran"
class="form-control">


<option>
Cash
</option>


<option>
Transfer
</option>


<option>
QRIS
</option>


</select>






<label class="mt-3">
Jumlah Bayar
</label>



<input

type="number"

name="jumlah_bayar"

class="form-control">





<label class="mt-3">
Status
</label>



<select name="status_pembayaran"
class="form-control">


<option>
Lunas
</option>


<option>
Belum Lunas
</option>


</select>






<button class="btn btn-success mt-3">

Simpan

</button>



</form>



</div>


</body>


</html>