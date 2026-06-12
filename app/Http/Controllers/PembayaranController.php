<?php

namespace App\Http\Controllers;


use App\Models\Pembayaran;
use App\Models\TransaksiPenjualan;
use Illuminate\Http\Request;



class PembayaranController extends Controller
{


    public function index()
    {


        $pembayaran = Pembayaran::with(
            'transaksi'
        )->get();



        return view(
            'pembayaran.index',
            compact('pembayaran')
        );


    }







    public function create()
    {


        $transaksi =
        TransaksiPenjualan::all();



        return view(
            'pembayaran.create',
            compact('transaksi')
        );


    }







    public function store(Request $request)
    {


        $request->validate([


            'transaksi_id'=>'required',

            'metode_pembayaran'=>'required',

            'jumlah_bayar'=>'required',

            'status_pembayaran'=>'required'


        ]);




        Pembayaran::create([


            'transaksi_id'=>$request->transaksi_id,


            'metode_pembayaran'=>$request->metode_pembayaran,


            'jumlah_bayar'=>$request->jumlah_bayar,


            'status_pembayaran'=>$request->status_pembayaran,


            'tanggal_pembayaran'=>now()


        ]);




        return redirect('/pembayaran')
        ->with(
            'success',
            'Pembayaran berhasil ditambahkan'
        );


    }








    public function edit($id)
    {


        $pembayaran =
        Pembayaran::findOrFail($id);



        $transaksi =
        TransaksiPenjualan::all();



        return view(
            'pembayaran.edit',
            compact(
                'pembayaran',
                'transaksi'
            )
        );


    }









    public function update(Request $request,$id)
    {


        $pembayaran =
        Pembayaran::findOrFail($id);




        $pembayaran->update([


            'transaksi_id'=>$request->transaksi_id,


            'metode_pembayaran'=>$request->metode_pembayaran,


            'jumlah_bayar'=>$request->jumlah_bayar,


            'status_pembayaran'=>$request->status_pembayaran


        ]);




        return redirect('/pembayaran')
        ->with(
            'success',
            'Pembayaran berhasil diubah'
        );


    }








    public function destroy($id)
    {


        Pembayaran::destroy($id);



        return redirect('/pembayaran')
        ->with(
            'success',
            'Pembayaran berhasil dihapus'
        );


    }



}