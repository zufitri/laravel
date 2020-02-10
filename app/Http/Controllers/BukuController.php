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

         return view('buku.index',compact('buku'));
    }   
    public function show($id)
    {
        $buku= Buku::find($id);
        return view('buku.show',compact('buku'));
    }
    public function hitungBuku()
    {
        $buku=Buku::count();
        return $buku;
    }
    public function create($a){
        $buku= new Buku;
        $buku->judul= $a;
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        $buku->status=1;
        $buku->save();
        return $buku;
    }
    public function update($id,$b){
        $buku=Buku::find($id);
        $buku->judul= $b;
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        $buku->status=false;
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
