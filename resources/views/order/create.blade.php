@extends('layout.app')
@section('content')

    <div class="col-md-6 mb-3">
            <a href="{{ route('trans_order.index') }}" class="btn btn-secondary btn-md">
                <i class="bi bi-arrow-left"></i>Kembali
            </a>
    </div>
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('trans_order.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">No. Transaksi</label>
                            <input value="{{ $order_code ?? '' }}" type="text" name="order_code" id="" class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="">Tanggal Order Laundry</label>
                            <input type="date" name="order_date" id="" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">Nama Pelanggan</label>
                            <select name="id_customer" id="" class="form-control">
                                <option value="">--Pilih Pelanggan--</option>
                                @foreach ($customers as $cus )
                                    <option value="{{ $cus->id }}">{{ $cus->customer_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="">Tanggal Pengembalian Laundry</label>
                            <input type="date" name="order_end_date" id="" class="form-control">
                        </div>
                    </div>
                </div>

                <div align="right" class="mb-3">
                    <button class="btn btn-primary add-row" id="add-row">Tambah Baris</button>
                </div>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-parent">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                

                <div class="mt-3">
                    <button class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
    </div>
@endsection