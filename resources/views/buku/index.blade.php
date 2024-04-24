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
                            <th>Sampul</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Stok</th>
                            <th>Harga Pokok</th>
                            <th>Harga Jual</th>
                            <th>Diskon</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataBuku as $item)
                            <tr class="align-middle">
                                <td>
                                    <img src="assets/images/dish_01.png" alt="" class="rounded object-fit-cover"
                                        width="40">
                                </td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->penulis }}</td>
                                <td>{{ $item->penerbit }}</td>
                                <td>{{ $item->tahun_terbit }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->harga_produk }}</td>
                                <td>{{ $item->harga_jual }}</td>
                                <td>{{ $item->diskon }}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-1">
                                        <a href="{{ route('buku.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm py-1 px-3 rounded-1 text-white">
                                            <i class="bx bx-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('buku.destroy', $item->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-light btn-sm py-1 px-3 rounded-1" type="submit">
                                                <i class="bx bx-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
