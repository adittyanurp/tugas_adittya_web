@extends('layout.mainLayout')

<!-- judul konten -->
@section('title','data siswa')
<!-- isi konten yang akan ditampilkan -->
@section('content')
<div class="mt-5">
    <h1>Ini halaman home</h1>
    <h2>selamat datang {{$nama}},Role anda adalah {{$role}}</h2>

    @if ($role=='admin')
        <a href="#">Menuju ke halaman admin</a>
    @elseif ($role=='petugas')
    <a href="#">menuju halaman petugas</a>
    @else
    role tidak terdaftar
    @endif


    <h2> Data siswa</h2>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>Tingkat</th>
        </tr>
</thead>
<tbody>
        @foreach ($data as $siswa)
        <tr>
            <td>{{$siswa['Nis']}}</td>
            <td>{{$siswa['nama_siswa']}}</td>
            <td>{{$siswa['jurusan']}}</td>
            <td>{{$siswa['tingkat']}}</td>

        </tr>
        @endforeach
</tbody>
</table>
</div>
@endsection
