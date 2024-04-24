<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kasir.index',[
            'dataKasir' => User::orderBy('id','DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'akses' => 'required',
        ]);
        $validated['password'] = Hash::make($request->password);
        User::create($validated);

        return redirect()->route('kasir.index')->with('pesan','Kasir berhasil ditambahkan');
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
        return view('kasir.update',[
            'dataKasir'=> User::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            // 'password' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'akses' => 'required',
        ]);
        if (!empty($request->password)) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }
        User::find($id)->update($validated);

        return redirect()->route('kasir.index')->with('pesan','Kasir berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return back()->with('pesan','Buku berhasil di hapus');
    }
}
