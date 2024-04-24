@extends('layouts.app')
@section('content')
    <div class="flex-centerbetween mb-4">
        <h2 class="text-dark fw-bold mb-0">Update Buku</h2>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <form action="{{ route('buku.update',$dataBuku->id) }}" method="post" >
                @csrf @method('PUT')
                <div class="mb-3">
                    <label for="judul">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="{{$dataBuku->judul}}" autofocus >
                </div>
                
                <div class="mb-3">
                    <label for="penulis">Penulis Buku</label>
                    <input type="text" name="penulis" class="form-control" id="penulis" value="{{$dataBuku->penulis}}" autofocus>
                </div>

                <div class="mb-3">
                    <label for="penerbit">Penerbit Buku</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit" value="{{$dataBuku->penerbit}}" autofocus>
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit">Tahun Terbit Buku</label>
                    <input type="date" name="tahun_terbit" class="form-control" id="tahun_terbit" value="{{$dataBuku->tahun_terbit}}" autofocus>
                </div>
                <div class="mb-3">
                    <label for="stok">Stok Buku</label>
                    <input type="text" name="stok" class="form-control" id="stok" value="{{$dataBuku->stok}}" autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="harga_produk">Harga Produk</label>
                    <input type="number" name="harga_produk" id="harga_produk" class="form-control" value="{{$dataBuku->harga_produk}}">
                </div>
                <div class="mb-3">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="{{$dataBuku->harga_jual}}">
                </div>
                <div class="mb-3">
                    <label for="diskon">Diskon</label>
                    <input type="number" name="diskon" id="diskon" class="form-control" value="{{$dataBuku->diskon}}"> 
                </div>
                {{-- <div class="mb-3">
                    <label for="sampul">Sampul Buku</label>
                    <input type="file" name="sampul" id="sampul" class="form-control">
                </div> --}}
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="submit">
                        <i class="bx bx-save"></i> Simpan Baru
                    </button>
                    <a href="{{ route('buku.index') }}" class="btn btn-light">
                        <i class="bx bx-arrow-back"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
