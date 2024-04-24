@extends('layouts.app')
@section('content')
    <div class="flex-centerbetween mb-4">
        <h2 class="text-dark fw-bold mb-0">Kasir</h2>
        <h4 class="">{{date('d/m/Y')}}</h4>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <div class="mb-3 col-4">
                <label for="distributor_id" class="form-label">Distributor ID</label>
                <input type="email" class="form-control" name="distributor_id" id="distributor_id">
            </div>
        </div>
    </div>
@endsection
