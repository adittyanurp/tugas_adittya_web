@extends('layout.mainLayout')

@section('title', 'ClassRoom')

@section('content')
    halo ini halaman class
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nama </th>

        </tr>
        @foreach ($class as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection
