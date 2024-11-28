@extends('layout.app')
@section('content')

    <div class="col-md-6 mb-3">
            <a href="{{ route('service.index') }}" class="btn btn-secondary btn-md">
                <i class="bi bi-arrow-left"></i>Kembali
            </a>
    </div>
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('service.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" name="service_name" id="" class="form-control" placeholder="Masukkan nama paket">
                </div>

                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" name="price" id="" class="form-control" placeholder="Masukkan nominal harga">
                </div>

                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" name="description" id="" class="form-control" placeholder="Masukkan deskripsi paket">
                </div>

                <div class="mb-3">
                    <button class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
    </div>
@endsection