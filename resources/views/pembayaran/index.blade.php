<!DOCTYPE html>
<html>

<head>

<title>Pembayaran</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light d-flex flex-column min-vh-100">


@include('layout.navbar')



<main class="container mt-4 flex-grow-1">


<div class="card shadow">


<div class="card-body">



<div class="d-flex justify-content-between align-items-center mb-3">


<div>

<h2 class="fw-bold">
Data Pembayaran
</h2>


<p class="text-muted mb-0">
Kelola data pembayaran transaksi
</p>


</div>



<a href="/pembayaran/create"
class="btn btn-primary">

+ Tambah Pembayaran

</a>


</div>





@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif





<table class="table table-hover table-bordered">


<thead class="table-dark">

<tr>

<th>No</th>
<th>Transaksi</th>
<th>Metode</th>
<th>Jumlah Bayar</th>
<th>Status</th>
<th>Tanggal</th>
<th>Aksi</th>

</tr>

</thead>



<tbody>



@forelse($pembayaran as $p)



<tr>


<td>
{{ $loop->iteration }}
</td>



<td>

@if($p->transaksi)

Transaksi #{{ $p->transaksi->id }}

@else

-

@endif

</td>




<td>

<span class="badge bg-primary">

{{ $p->metode_pembayaran }}

</span>

</td>





<td>

<b>

Rp {{ number_format($p->jumlah_bayar,0,',','.') }}

</b>

</td>





<td>


@if($p->status_pembayaran == 'Lunas')

<span class="badge bg-success">

Lunas

</span>


@else

<span class="badge bg-warning">

{{ $p->status_pembayaran }}

</span>


@endif


</td>





<td>

{{ $p->tanggal_pembayaran }}

</td>





<td>



<a href="/pembayaran/{{ $p->id }}/edit"

class="btn btn-warning btn-sm">

Edit

</a>





<form action="/pembayaran/{{ $p->id }}"

method="POST"

class="d-inline">


@csrf

@method('DELETE')



<button

onclick="return confirm('Hapus pembayaran ini?')"

class="btn btn-danger btn-sm">


Hapus


</button>


</form>



</td>


</tr>





@empty



<tr>

<td colspan="7" class="text-center">

Belum ada data pembayaran

</td>

</tr>




@endforelse





</tbody>


</table>



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