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

                        <div class="mb-3">
                            <label for="">Paket</label>
                            <select name="" id="id_paket" class="form-control">
                                <option value="">--Pilih Paket--</option>

                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" class="form-control" name="" id="price">
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

                        <div class="mb-3">
                            <label for="">Qty/kg</label>
                            <input type="number" class="qty form-control" placeholder="Masukkan Qty">
                        </div>
                    </div>
                </div>

                <div align="right" class="mb-3">
                    <button class="btn btn-primary add-row" id="add-row">Tambah Paket</button>
                </div>

                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-parent">
                            
                        </tbody>

                        <tfoot>
                            <td colspan="3">Total</td>
                            <td>
                                <input type="number" class="total-harga form-control" name="total_price" id="" readonly>
                                <input type="hidden" name="order_status" value="0">
                            </td>
                        </tfoot>
                    </table>
                </div>


                

                <div class="mt-3">
                    <button class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
    </div>
@endsection