<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan(){
        return "ini  contoh latihan controller";
    }
    public function latihan2(){
        $a="fitri";
        $b="andriani";
        return 'nama saya adalah '.$a.' '.$b;

    }
    public function latihan3(){
        $a='jimin';
        return view('test2',compact('a'));
        }

    public function latihan4(){
    $a='jimin';
    return view('test',['nama'=>$a]);
    }
    public function latihan5(){
        $a='fitri';
        $b='isalam';
        $c='perempuan';
        $d='cibaduyut';
        $e='smik asssalaam';
        $f='11 rpl 3';
        $g='rpl';
        $h='nulis';
        $i='16';
        
        return view('test2',compact('a','b'));
        }

    
        public function  soal($a=null,$b=null,$harga=null){
        if (isset($a)){
            $a="anda memesan $a";

        }
        if (isset($b)){
            $b="& $b";

        }
        if (isset($harga)){
            if ($harga>=25000){
                $harga= 'Ukuran Jumbo';
            }
            elseif ($harga<=25000 && $harga>=15000){
                $harga='Ukuran Medium';
            }
            elseif ($harga<=15000 && $harga>=1000){
                $harga='Ukuran Small';
            }
            else {
                $harga='harga tidak valid';
            }
            $harga=" $harga";
        }
        if(!isset($a)){
            $a= "anda belum memesan sesuatu"; 
        }
        return view('pesan',compact('a','b','harga'));
}
}
