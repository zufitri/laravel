<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    //
    public function pass()
    {
    $nama = "ucup abdul mustofa";
    return view('latihan',compact('nama'));
    }

    public function pass1()
    {
        $gaji=2000000;
        return view('latihan1',['penghasilan'=>$gaji]);
    }//pass paramenter
    public function status($status='jomlo')
    {
        return view('latihan2',compact('status'));
    }
    public function loop(){
        $buku=[
            ['judul'=>'bangkit dari remedial','penerbit'=>'erlangga',
            'harga'=>100000,'penulis'=>'aku yang suka remidi'

        ],
        ['judul'=>'tips move on dari kamu','penerbit'=>'erlangga',
        'harga'=>150000,'penulis'=>'epul'
       ],
       ['judul'=>'kekuatan 1/3malam ','penerbit'=>'erlangga',
       'harga'=>250000,'penulis'=>'mutia'
       ]
    ];
            return view('latihan3',compact('buku'));
    }
}
