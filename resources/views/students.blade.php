@extends('layout.mainLayout')

@section('title', 'Students')

@section('content')
    halo ini halaman data siswa
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Gender</th>
            <th>Nis</th>
            <th>Kelas</th>
        </tr>
        @foreach ($students as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_siswa }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->class_id }}</td>

            </tr>
        @endforeach
    </table>
@endsection
