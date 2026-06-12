<?php

namespace App\Http\Controllers;


use App\Models\TransaksiPenjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TransaksiPenjualanController extends Controller
{


    public function index()
    {

        $transaksi = TransaksiPenjualan::with([
            'produk',
            'user'
        ])->get();


        return view(
            'transaksi.index',
            compact('transaksi')
        );

    }





    public function create()
    {

        $produk = Produk::all();


        return view(
            'transaksi.create',
            compact('produk')
        );

    }






    public function store(Request $request)
    {

        $request->validate([

            'produk_id'=>'required',

            'jumlah'=>'required'

        ]);



        $produk = Produk::findOrFail(
            $request->produk_id
        );



        TransaksiPenjualan::create([


            'user_id'=>Auth::id(),


            'produk_id'=>$request->produk_id,


            'jumlah'=>$request->jumlah,


            'total_harga'=>
            $produk->harga * $request->jumlah,


            'tanggal_transaksi'=>now()


        ]);




        return redirect('/transaksi')
        ->with(
            'success',
            'Transaksi berhasil ditambahkan'
        );

    }


public function edit($id)
{

    $transaksi = TransaksiPenjualan::findOrFail($id);


    $produk = Produk::all();


    return view(
        'transaksi.edit',
        compact('transaksi','produk')
    );

}

public function update(Request $request,$id)
{


    $request->validate([

        'produk_id'=>'required',
        'jumlah'=>'required'

    ]);



    $produk = Produk::findOrFail(
        $request->produk_id
    );



    $transaksi =
    TransaksiPenjualan::findOrFail($id);



    $transaksi->update([


        'produk_id'=>$request->produk_id,


        'jumlah'=>$request->jumlah,


        'total_harga'=>
        $produk->harga * $request->jumlah


    ]);



    return redirect('/transaksi')
    ->with(
        'success',
        'Transaksi berhasil diubah'
    );


}


    public function destroy($id)
    {

        $transaksi =
        TransaksiPenjualan::findOrFail($id);



        $transaksi->delete();



        return redirect('/transaksi')
        ->with(
            'success',
            'Transaksi berhasil dihapus'
        );

    }



}