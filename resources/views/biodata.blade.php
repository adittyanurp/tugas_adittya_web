@extends('layout.mainLayout')
@section('content')
    <h1>Ini halaman Biodata</h1>
    <h2>Nama :{{$nama}}</h2>
    <h2>Alamat : {{$alamat}}</h2>
    <h2>Nomor Telephone : {{$telp}}</h2>
    <h2>Hobi :{{$hobi}}</h2>
    <h2>Agama :{{$agama}}</h2>
    <h2>Sekolah :{{$sekolah}}</h2>
    <h2>Tempat tanggal lahir :{{$ttl}}</h2>
@endsection
