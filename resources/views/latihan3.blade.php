<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Buku</center>
    @foreach($buku as $data)
    judul       :{{$data['judul']}}<br>
    penerbit    :{{$data['penerbit']}}<br>
    harga       :{{$data['harga']}}<br>
    penulis     :{{$data['penulis']}}<br>
    
            @if ($data['harga']>=150000 && $data['harga']<200000 )
               @php $status='regular' @endphp
            @elseif ($data['harga']>=200000)
                @php $status='premium' @endphp
            @elseif ($data['harga']<150000)
                @php $status='bajakan' @endphp
            @endif
            @if ($status=="premium" || $status=="regular")
               @php $keterangan='anda pembeli cerdas' @endphp
            @else($status=="bajakan")
                @php $keterangan='anda pembeli kuran cerdas' @endphp
            @endif
            status ={{$status}}<br>
            keterangan={{$keterangan}}<hr>
             @endforeach
</body>
</html>