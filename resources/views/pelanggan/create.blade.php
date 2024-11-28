@extends('layout.app')
@section('content')

    <div class="col-md-6 mb-3">
            <a href="{{ route('customer.index') }}" class="btn btn-secondary btn-md">
                <i class="bi bi-arrow-left"></i>Kembali
            </a>
    </div>
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" name="customer_name" id="" class="form-control" placeholder="Masukkan nama pelanggan">
                </div>

                <div class="mb-3">
                    <label for="">Telepon</label>
                    <input type="number" name="phone" id="" class="form-control" placeholder="Masukkan nomer telepon">
                </div>

                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" name="address" id="" class="form-control" placeholder="Masukkan alamat pelanggan">
                </div>

                <div class="mb-3">
                    <button class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
    </div>
@endsection