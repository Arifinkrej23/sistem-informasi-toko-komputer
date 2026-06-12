<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class TransaksiPenjualan extends Model
{

    protected $table='transaksi_penjualan';


    protected $fillable=[

        'user_id',
        'produk_id',
        'jumlah',
        'total_harga',
        'tanggal_transaksi'

    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }


    public function pembayaran()
{
    return $this->hasOne(
        Pembayaran::class,
        'transaksi_id'
    );
}
}