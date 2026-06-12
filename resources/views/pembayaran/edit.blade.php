<!DOCTYPE html>

<html>

<head>

<title>Edit Pembayaran</title>


<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">


</head>


<body>


@include('layout.navbar')



<div class="container mt-4">


<h2>Edit Pembayaran</h2>




<form action="/pembayaran/{{ $pembayaran->id }}"
method="POST">


@csrf

@method('PUT')




<label>
Transaksi
</label>


<select name="transaksi_id"
class="form-control">



@foreach($transaksi as $t)



<option value="{{ $t->id }}"


@if($t->id == $pembayaran->transaksi_id)

selected

@endif


>


Transaksi #{{ $t->id }}

</option>


@endforeach



</select>





<label class="mt-3">
Metode Pembayaran
</label>


<input

name="metode_pembayaran"

class="form-control"

value="{{ $pembayaran->metode_pembayaran }}">






<label class="mt-3">
Jumlah Bayar
</label>



<input

type="number"

name="jumlah_bayar"

class="form-control"

value="{{ $pembayaran->jumlah_bayar }}">





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





<button class="btn btn-primary mt-3">

Update

</button>




</form>



</div>


</body>

</html>