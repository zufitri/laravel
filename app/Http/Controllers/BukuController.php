<?php

namespace App\Http\Controllers;
use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function index()
    {
         $buku= Buku::all();

         return $buku;
    }   
    public function show($id)
    {
        $buku= Buku::find($id);
        return $buku;
    }
    public function hitungBuku()
    {
        $buku=Buku::count();
        return $buku;
    }
    public function create(){
        $buku= new Buku;
        $buku->judul= 'aku kamu dan dia ';
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        $buku->status=1;
        $buku->save();
        return $buku;
    }
    public function delete()
    {
        $buku=Buku::find($id);
        $buku->delete();
        return $buku;
    }

}
