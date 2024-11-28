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
            <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input value="{{ $customer->customer_name ?? '' }}" type="text" name="customer_name" id="" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Harga</label>
                    <input value="{{ $customer->phone ?? '' }}" type="number" name="phone" id="" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input value="{{ $customer->address ?? '' }}" type="text" name="address" id="" class="form-control">
                </div>

                <div class="mb-3">
                    <button class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
    </div>
@endsection