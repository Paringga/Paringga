<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Paringga | About</title>
</head>
<body>
@extends('layouts.main')

@section('container')
    <h1> Halaman About </h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200px">
@endsection
</body>
</html>