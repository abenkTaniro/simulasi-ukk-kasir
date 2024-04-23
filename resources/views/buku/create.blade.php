@extends('layouts.app')
@section('content')
    <div class="flex-centerbetween mb-4">
        <h2 class="text-dark fw-bold mb-0">Tambah Menu</h2>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="judul">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="judul" autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="penulis">Penulis Buku</label>
                    <input type="text" name="penulis" class="form-control" id="penulis" autofocus>
                </div>

                <div class="mb-3">
                    <label for="penerbit">Penerbit Buku</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit" autofocus>
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit">Tahun Terbit Buku</label>
                    <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" autofocus>
                </div>
                <div class="mb-3">
                    <label for="stok">Stok Buku</label>
                    <input type="text" name="stok" class="form-control" id="stok" autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="harga_produk">Harga Produk</label>
                    <input type="number" name="harga_produk" id="harga_produk" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" name="harga_jual" id="harga_jual" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="sampul">Sampul Buku</label>
                    <input type="file" name="sampul" id="sampul" class="form-control">
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="submit">
                        <i class="bx bx-save"></i> Simpan Baru
                    </button>
                    <a href="dashboard-menu.html" class="btn btn-light">
                        <i class="bx bx-arrow-back"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
