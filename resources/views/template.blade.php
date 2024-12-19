<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>website kelas laravel 3A</h1>
    <hr>
    <a href="{{('/')}}">home</a>
    <a href="{{('/tentang')}}">tentang</a>
    <a href="{{('/kontak')}}">kontak</a>
    <a href="{{('/siswa')}}">Data siswa</a>
    <hr>
    @yield('content')
</body>
</html>