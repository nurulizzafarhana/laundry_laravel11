@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card-header">Data Pengguna</h3>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input value="{{ $user->name ?? '' }}" type="text" name="name" id="" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Email</label>
                    <input value="{{ $user->email ?? '' }}" type="email" name="email" id="" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>

                <div class="mb-3">
                    <button class="btn btn-success">Simpan</button>
                </div>

            </form>
        </div>
    </div>
@endsection