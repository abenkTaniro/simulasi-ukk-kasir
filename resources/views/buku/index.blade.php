@extends('layouts.app')
@section('content')
<div class="flex-centerbetween mb-4">
    <h2 class="text-dark fw-bold mb-0">Menu</h2>
    <a href="{{ route('buku.create') }}" class="btn btn-primary">
        <i class="bx bx-plus"></i> Tambah Menu
    </a>
</div>
<div class="card border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Kategori Menu</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>
                            <img src="assets/images/dish_01.png" alt="" class="rounded object-fit-cover"
                                width="40">
                        </td>
                        <td>Cheesey Chicken</td>
                        <td>Makanan</td>
                        <td>Rp. 35,000</td>
                        <td>
                            <div class="d-flex justify-content-end gap-1">
                                <a href="#" class="btn btn-warning btn-sm py-1 px-3 rounded-1 text-white">
                                    <i class="bx bx-edit"></i> Edit
                                </a>
                                <button class="btn btn-light btn-sm py-1 px-3 rounded-1">
                                    <i class="bx bx-trash"></i> Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection