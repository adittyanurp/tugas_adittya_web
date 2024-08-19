<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ini halaman detail</h1>
    <h2>ini adalah detail produk dari id {{$data['id']}}</h2>
    <table>
        <tr>
        <td>ID</td>
        <td>:</td>
        <td>{{$data['id']}}</td>
        </tr>
        <tr>
        <td>nama_produk</td>
        <td>:</td>
        <td>{{$data['nama_produk']}}</td>
        </tr>
        <tr>
        <td>harga</td>
        <td>:</td>
        <td>{{$data['harga']}}</td>
        </tr>
        <tr>
        <td>stok</td>
        <td>:</td>
        <td>{{$data['stok']}}</td>
        </tr>
    </table>
</body>
</html>