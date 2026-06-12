<!DOCTYPE html>
<html>

<head>

<title>Edit Pembayaran</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light">


@include('layout.navbar')


<div class="container mt-4">


<div class="card shadow">


<div class="card-body">


<h2>Edit Pembayaran</h2>



<form action="/pembayaran/{{ $pembayaran->id }}" method="POST">


@csrf

@method('PUT')





<label>

Transaksi

</label>



<select name="transaksi_id" class="form-control">





@foreach($transaksi as $t)



<option value="{{ $t->id }}"


{{ $t->id == $pembayaran->transaksi_id ? 'selected' : '' }}


>


Transaksi #{{ $t->id }}

-

Rp {{ number_format($t->total_harga,0,',','.') }}


</option>



@endforeach





</select>








<label class="mt-3">

Metode Pembayaran

</label>



<select name="metode_pembayaran" class="form-control">


<option {{ $pembayaran->metode_pembayaran == 'Cash' ? 'selected' : '' }}>
Cash
</option>


<option {{ $pembayaran->metode_pembayaran == 'Transfer' ? 'selected' : '' }}>
Transfer
</option>


<option {{ $pembayaran->metode_pembayaran == 'QRIS' ? 'selected' : '' }}>
QRIS
</option>


</select>








<label class="mt-3">

Jumlah Bayar

</label>



<input

type="number"

name="jumlah_bayar"

class="form-control"

value="{{ $pembayaran->jumlah_bayar }}">







<label class="mt-3">

Status Pembayaran

</label>




<select name="status_pembayaran" class="form-control">



<option {{ $pembayaran->status_pembayaran == 'Lunas' ? 'selected' : '' }}>

Lunas

</option>



<option {{ $pembayaran->status_pembayaran == 'Belum Lunas' ? 'selected' : '' }}>

Belum Lunas

</option>



</select>








<button class="btn btn-warning mt-3">

Update

</button>





</form>


</div>


</div>


</div>


</body>

</html>