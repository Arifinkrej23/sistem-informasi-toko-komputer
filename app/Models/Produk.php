<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

    protected $table = 'produk';


    protected $fillable = [
        'kategori_id',
        'nama_produk',
        'harga',
        'stok',
        'deskripsi'
    ];



    public function kategori()
    {
        return $this->belongsTo(
            KategoriProduk::class,
            'kategori_id'
        );
    }

    public function transaksi()
{
    return $this->hasMany(
        TransaksiPenjualan::class
    );
}
}