<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
         $siswa=Siswa::all();
         return $siswa;
    }
    public function tampil($id)
    {
        $siswa= Siswa::find($id);
        return $siswa;
    }
    public function hitungData()
    {
        $siswa=Siswa::count();
        return $siswa;
    }
    public function create($a){
        $siswa= new Siswa;
        $siswa->nama= $a;
        $siswa->nis=002;
        $siswa->kelas='sebelas';
        $siswa->jurusan='rpl';//untuk kata yang panjang
        $siswa->alamat='cibaduyut';
        $siswa->tgl_lahir='2003-02-02';
        $siswa->save();
        return $siswa;
    }
    public function update($id,$b){
        $siswa=Siswa::find($id);
        $siswa->nama= $b;
        $siswa->nis=005;
        $siswa->kelas='sebelas';
        $siswa->jurusan='rpl';//untuk kata yang panjang
        $siswa->alamat='cibaduyut';
        $siswa->tgl_lahir='2003-02-02';
        $siswa->save();
        return $siswa;
    }
    public function delete($id)
    {
        $siswa=Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }




}
