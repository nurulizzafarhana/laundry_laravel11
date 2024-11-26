@extends('kalkulator.index')
@section('content')

    <div class="container-md">
        <div class="container-xl mt-4 text-center">
            <h1>{{ $title ?? '' }}</h1>
        </div>

        <div class="container-md">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input value="{{ $user->name ?? '' }}" type="text" name="name" id="" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input value="{{ $user->email ?? '' }}" type="email" name="email" id="" class="form-control" placeholder="Enter your email">
                    </div>

                    <div class="col-md-6">
                        <label for="">Password</label>
                        <input value="" type="password" name="password" id="" class="form-control" placeholder="Enter your password">
                    </div>
                </div>

                <button class="btn btn-primary mt-3">Simpan</button>
    
            </form>
        </div>

        
    </div>
@endsection
