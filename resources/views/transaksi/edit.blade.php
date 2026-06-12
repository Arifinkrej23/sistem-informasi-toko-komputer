<!DOCTYPE html>

<html>

<head>


<title>Edit Transaksi</title>


<link rel="stylesheet"
href="{{ asset('css/bootstrap.min.css') }}">


</head>



<body>


@include('layout.navbar')



<div class="container mt-4">


<h2>Edit Transaksi</h2>




<form action="/transaksi/{{ $transaksi->id }}"
method="POST">


@csrf

@method('PUT')




<label>
Produk
</label>



<select name="produk_id"
class="form-control">



@foreach($produk as $p)



<option value="{{ $p->id }}"


@if($p->id == $transaksi->produk_id)

selected

@endif


>


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

class="form-control"

value="{{ $transaksi->jumlah }}">





<button class="btn btn-primary mt-3">

Update

</button>




</form>



</div>



</body>

</html>