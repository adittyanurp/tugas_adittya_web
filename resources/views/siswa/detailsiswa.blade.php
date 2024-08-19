<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
</head>
<body>
<h2>ini adalah detailsiswa{{$data['Nis']}}</h2>
<table>
        <tr>
        <td>Nis</td>
        <td>:</td>
        <td>{{$data['Nis']}}</td>
        </tr>
        <tr>
        <td>nama_siswa</td>
        <td>:</td>
        <td>{{$data['nama_siswa']}}</td>
        </tr>
        <tr>
        <td>jurusan</td>
        <td>:</td>
        <td>{{$data['jurusan']}}</td>
        </tr>
        <tr>
        <td>tingkat</td>
        <td>:</td>
        <td>{{$data['tingkat']}}</td>
        </tr>
        <tr>
            <td>eskul</td>
            <td>:</td>
            <td>{{$data['eskul']}}</td>
        </tr>
    </table>
</body>
</html>