<!DOCTYPE html>
<html>

<head>

<title>Login - Sistem Penjualan Komputer</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>


<body class="bg-light">



<div class="container mt-5">



<div class="row justify-content-center align-items-center" style="min-height:80vh;">



<div class="col-md-5">





<div class="card shadow-lg">



<div class="card-body p-5">





<h2 class="text-center mb-3">

Sistem Penjualan Komputer

</h2>



<p class="text-center text-muted">

Silahkan login untuk masuk ke sistem

</p>





@if(session('error'))

<div class="alert alert-danger">

{{ session('error') }}

</div>

@endif






<form action="/login" method="POST">


@csrf





<div class="mb-3">


<label class="form-label">

Email

</label>


<input

type="email"

name="email"

class="form-control"

placeholder="Masukkan email"

required>


</div>






<div class="mb-3">


<label class="form-label">

Password

</label>



<input

type="password"

name="password"

class="form-control"

placeholder="Masukkan password"

required>


</div>







<button class="btn btn-primary w-100">

Login

</button>







</form>







<hr>







<div class="text-center">


<a href="/" class="text-decoration-none">


← Kembali ke halaman utama


</a>


</div>







</div>


</div>






</div>






</div>






</div>






</body>

</html>