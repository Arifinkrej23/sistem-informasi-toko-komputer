<?php

namespace App\Http\Controllers;


use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\TransaksiPenjualan;
use App\Models\Pembayaran;


class DashboardController extends Controller
{


    public function index()
    {


        $kategori = KategoriProduk::count();


        $produk = Produk::count();


        $transaksi = TransaksiPenjualan::count();


        $pembayaran = Pembayaran::count();



        return view('dashboard', compact(
            'kategori',
            'produk',
            'transaksi',
            'pembayaran'
        ));


    }


}