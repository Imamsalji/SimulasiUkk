<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
</head>
<body>
    <center class="mb-3">
        Pendaftaran Peserta Didik Baru
    </center>
    <table class="table">
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td>{{$show->nama}}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>:</td>
            <td>{{$show->jk}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td>{{$show->alamat}}</td>
        </tr>
        <tr>
            <th>Agama</th>
            <td>:</td>
            <td>{{$show->agama}}</td>
        </tr>
        <tr>
            <th>Asal Sekolah</th>
            <td>:</td>
            <td>{{$show->asal_sekolah}}</td>
        </tr>
        <tr>
            <th>Minat Jurusan</th>
            <td>:</td>
            <td>{{$show->minat_jurusan}}</td>
        </tr>
    </table>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>