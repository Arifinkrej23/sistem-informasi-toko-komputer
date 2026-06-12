<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{

    public function index()
    {
        $kategori = KategoriProduk::all();

        return view('kategori.index', compact('kategori'));
    }



    public function create()
    {
        return view('kategori.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori'=>'required',
            'deskripsi'=>'nullable'
        ]);


        KategoriProduk::create([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=>$request->deskripsi
        ]);


        return redirect('/kategori')
        ->with('success','Kategori berhasil ditambahkan');
    }




    public function edit($id)
    {
        $kategori = KategoriProduk::find($id);


        return view('kategori.edit', compact('kategori'));
    }





    public function update(Request $request,$id)
    {

        $request->validate([
            'nama_kategori'=>'required',
            'deskripsi'=>'nullable'
        ]);


        $kategori = KategoriProduk::find($id);


        $kategori->update([
            'nama_kategori'=>$request->nama_kategori,
            'deskripsi'=>$request->deskripsi
        ]);


        return redirect('/kategori')
        ->with('success','Kategori berhasil diubah');

    }





    public function destroy($id)
    {

        $kategori = KategoriProduk::find($id);


        $kategori->delete();


        return redirect('/kategori')
        ->with('success','Kategori berhasil dihapus');

    }

}