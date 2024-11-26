@extends('kalkulator.index')
@section('content')
    <form action="{{ route('store-bagi') }}" method="POST" style="margin-top: 20px;">
        @csrf

        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <label for="angka1">Angka 1</label>
                    <input type="number" class="form-control" name="angka1" id="angka1" placeholder="Masukkan Angka Pertama">
                </div>
                
                <div class="col-md-1 text-center">
                    <h2>/</h2> <!-- Multiplication sign -->
                </div>

                <div class="col-md-5">
                    <label for="angka2">Angka 2</label>
                    <input type="number" class="form-control" name="angka2" id="angka2" placeholder="Masukkan Angka Kedua">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <button class="btn btn-primary">Proses</button>
                </div>
            </div>

            <h2 class="mt-4">Hasil: {{ $hasilBagi }}</h2>
        </div>
    </form>
@endsection
