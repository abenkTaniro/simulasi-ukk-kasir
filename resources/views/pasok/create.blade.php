@extends('layouts.app')
@section('content')
    <div class="flex-centerbetween mb-4">
        <h2 class="text-dark fw-bold mb-0">Tambah Kasir</h2>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <form action="{{ route('kasir.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" autofocus>
                </div>

                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" autofocus>
                </div>
                <div class="mb-3">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" id="email" autofocus>
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" autofocus>
                </div>

                <div class="mb-3">
                    <label for="akses">Hak Akses</label>
                    <select class="form-select" name="akses">
                        <option value="kasir">Kasir</option>
                        <option value="admin">Admin</option>
                    </select>
                    {{-- <input type="text" name="akses" class="form-control" id="akses" autofocus> --}}
                </div>
                <div class="mb-3">
                    <label for="telepon">Telepon</label>
                    <input type="number" name="telepon" class="form-control" id="telepon" autofocus>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    {{-- <input type="text" name="alamat" class="form-control" id="alamat" autofocus> --}}
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-primary" type="submit">
                        <i class="bx bx-save"></i> Simpan Baru
                    </button>
                    <a href="{{ route('kasir.index') }}" class="btn btn-light">
                        <i class="bx bx-arrow-back"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
