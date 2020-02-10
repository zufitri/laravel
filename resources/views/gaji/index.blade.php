<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>penggajian</center>
<table border="1">
    <thead>
         <tr>
            <th>nip</th>
            <th>nama</th>
            <th>jenis kelamin</th>
            <th>jabatan</th>
            <th>aksi</th>
        </tr>    
    <thead>
    <tbody>
    @foreach($gaji as $penggajian)
    <tr>
    <td>{{$penggajian->nip}} </td>
    <td>{{$penggajian->nama}} </td>
    <td>{{$penggajian->jenis_kelamin}} </td>
    <td>{{$penggajian->jabatan}} </td>
   <td><a href="/penggajian/{{$penggajian->id}}">lihat</a></td>
    </tr>

    @endforeach
</table>
    
</body>
</html>