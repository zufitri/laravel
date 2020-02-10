<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>

    <legend>show buku</legend> 
    judul           : <b>{{$buku->judul}}</b><br>
    jumlah halaman  : <b>{{$buku->jumlah_halaman}}</b><br>
    penerbit        : <b>{{$buku->penerbit}} </b><br>
    synopsis        : <b>{{$buku->synopsis}} </b><br>
    status          : <b>{{$buku->status}} </b>
</fieldset>
    
</body>
</html>