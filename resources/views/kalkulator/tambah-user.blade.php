@extends('kalkulator.index')
@section('content')

    <div class="container-md">
        <div class="container-xl mt-4 text-center">
            <h1>{{ $title ?? '' }}</h1>
        </div>

        <div class="container-md">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="Enter your email">
                    </div>

                    <div class="col-md-6">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="Enter your password">
                    </div>
                </div>

                <button class="btn btn-primary mt-3">Simpan</button>
    
            </form>
        </div>

        
    </div>
@endsection
