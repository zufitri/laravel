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

<legend>show Gaji</legend> 

nip             : <b>{{$gaji->nip}}</b><br>
nama            : <b>{{$gaji->nama}}</b><br>
agama           : <b>{{$gaji->agama}} </b><br>
jenis kelamin   : <b>{{$gaji->jenis_kelamin}} </b><br>
alamat          : <b>{{$gaji->alamat}} </b><br>
jabatan         :<b>{{$gaji->jabatan}}</b><br>
jam_kerja       :<b>{{$gaji->jam_kerja}}</b><br>


@if ($gaji->jabatan == 'manager' )
               @php $gaji1=5000000; @endphp
            @elseif ($gaji->jabatan=='sekretaris')
                @php $gaji1=3500000; @endphp
            @elseif ($gaji->jabatan=='staff')
                @php $gaji1=2500000;  @endphp
            @endif
            
            gaji jabatan =<b>{{$gaji1}}</b><br>

            @if ($gaji['jam_kerja']>150)
               @php $jamker=$gaij1*5/100 @endphp
            @elseif ($gaji['jam_kerja']>200)
                @php $jamker=$gaji1*7.5/100 @endphp
            @elseif ($gaji['harga']<250)
                @php $jamker=$gaji1*10/100 @endphp
            @endif
            jam kerja=<b>{{$jamker}}</b><br>

            @php $total=$gaji1+$jamker;@endphp
            total gaji={{$total}}
            
</fieldset>
</body>
</html>