@extends('kalkulator.index')
@section('content')

    <div class="container-md">


        <div class="container-xl mt-4 text-center">
            <h1>Data Pengguna</h1>
        </div>

        <a class="btn btn-primary mb-2" href="{{ route('user.create') }}">Tambah User</a>

        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jiakh</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-warning mb-2" href="{{ route('user.edit', $user->id) }}">Edit</a>

                            {{-- get, delete --}}
                            {{-- <a href="{{ route('delete', $user->id) }}" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">Delete</a> --}}

                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
