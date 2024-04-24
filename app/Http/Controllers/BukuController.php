<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('buku.index',[
        'dataBuku' => Buku::orderBy('id','DESC')->get()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $sampul = $request->file('sampul');
        // $namaSampul = $request->judul."_".date('ymd_His').".".$sampul->getClientOriginalExtension();

        // $sampul->move('sampul_Buku',$namaSampul);
        // Buku::create([
        //     'judul' => $request->judul,
        //     'penulis' => $request->penulis,
        //     'penerbit' => $request->penerbit,
        //     'tahun_terbit' => $request->tahun_terbit,
        //     'stok' => $request->stok,
        //     'harga_produk' => $request->harga_produk,
        //     'harga_jual' => $request->harga_jual,
        //     'diskon' => $request->diskon,
        //     'sampul' => $namaSampul
        // ]);

        $validated = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'harga_produk' => 'required',
            'harga_jual' => 'required',
            'diskon' => 'nullable'
        ]);
        Buku::create($validated);

        return view('buku.index')->with('pesan','Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('buku.update',[
            'dataBuku'=> Buku::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'harga_produk' => 'required',
            'harga_jual' => 'required',
            'diskon' => 'nullable'
        ]);
        Buku::find($id)->update($validated);
        return redirect()->route('buku.index')->with('pesan','Buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Buku::find($id)->delete();
        return back()->with('pesan','Buku berhasil di hapus');
    }
}
