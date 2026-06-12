<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;


class ProdukController extends Controller
{


    public function index()
    {

        $produk = Produk::with('kategori')->get();
        return view('produk.index',
        compact('produk'));

    }




    public function create()
    {

        $kategori = KategoriProduk::all();
        return view('produk.create',
        compact('kategori'));

    }




    public function store(Request $request)
    {


        $request->validate([

            'kategori_id'=>'required',
            'nama_produk'=>'required',
            'harga'=>'required',
            'stok'=>'required'

        ]);



        Produk::create([

            'kategori_id'=>$request->kategori_id,
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'deskripsi'=>$request->deskripsi

        ]);



        return redirect('/produk')
        ->with('success',
        'Produk berhasil ditambahkan');


    }






    public function edit($id)
    {

        $produk = Produk::findOrFail($id);
        $kategori = KategoriProduk::all();



        return view('produk.edit',
        compact('produk','kategori'));

    }







    public function update(Request $request,$id)
    {


        $request->validate([

            'kategori_id'=>'required',
            'nama_produk'=>'required',
            'harga'=>'required',
            'stok'=>'required'

        ]);



        $produk = Produk::findOrFail($id);



        $produk->update([

            'kategori_id'=>$request->kategori_id,
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'deskripsi'=>$request->deskripsi


        ]);



        return redirect('/produk')
        ->with('success',
        'Produk berhasil diubah');


    }







    public function destroy($id)
    {

        $produk = Produk::findOrFail($id);
        $produk->delete();



        return redirect('/produk')
        ->with('success',
        'Produk berhasil dihapus');


    }


}