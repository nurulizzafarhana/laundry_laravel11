<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $title ?? '' }}</title>
</head>
<body>

    <div class="container-xl mt-4 text-center">
        <h1>Kalkulator Sederhana dengan Laravel</h1>
        <a href="{{ route('kali') }}">Kali</a>
        <a href="{{ route('bagi') }}">Bagi</a>
        <a href="{{ route('tambah') }}">Tambah</a>
        <a href="{{ route('kurang') }}">Kurang</a>
        
        
        <a href="{{ route('user.index') }}">Users</a>
        
    </div>


    <div class="container-xl content">
        @yield('content')
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>