<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pembayaran extends Model
{

    protected $table='pembayaran';


    protected $fillable=[

        'transaksi_id',
        'metode_pembayaran',
        'jumlah_bayar',
        'status_pembayaran',
        'tanggal_pembayaran'

    ];



    public function transaksi()
    {

        return $this->belongsTo(
            TransaksiPenjualan::class,
            'transaksi_id'
        );

    }


}