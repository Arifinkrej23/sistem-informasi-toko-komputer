<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">


<a class="navbar-brand" href="{{ url('/dashboard') }}">
Sistem Penjualan Komputer
</a>



<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarMenu"
aria-controls="navbarMenu"
aria-expanded="false">


<span class="navbar-toggler-icon"></span>

</button>





<div class="collapse navbar-collapse"
id="navbarMenu">



<ul class="navbar-nav me-auto">


<li class="nav-item">
<a class="nav-link"
href="{{ url('/dashboard') }}">
Dashboard
</a>
</li>



<li class="nav-item">
<a class="nav-link"
href="{{ url('/kategori') }}">
Kategori
</a>
</li>




<li class="nav-item">
<a class="nav-link"
href="{{ url('/produk') }}">
Produk
</a>
</li>




<li class="nav-item">
<a class="nav-link"
href="{{ url('/transaksi') }}">
Transaksi
</a>
</li>




<li class="nav-item">
<a class="nav-link"
href="{{ url('/pembayaran') }}">
Pembayaran
</a>
</li>


</ul>





<span class="text-white me-3">

{{ Auth::user()->name }}

</span>




<form action="{{ url('/logout') }}"
method="POST">

@csrf

<button class="btn btn-danger">
Logout
</button>

</form>




</div>


</div>

</nav>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>