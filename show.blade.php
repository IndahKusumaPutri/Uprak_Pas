<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
</head>
<body>
    <p>Detail Data</p><br/>
    <form action="#"> {{ csrf_field() }}

        <P><label for="nama_barang">Nama Barang :</label>
        {{ $barang->nama_barang }}</p>

        <P><label for="stock_barang">Stock Barang :</label>
        {{ $barang->stock_barang }}</p>

        <P><label for="merk">Merk Barang :</label>
        {{ $barang->merk }}</p>

        <br/>
        <a href="{{ route('barang.index') }}">Kembali</a>
    </form>
</body>
</html>