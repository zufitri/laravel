<?php

use Illuminate\Database\Seeder;

class perpusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $buku= new Perpus;
        $buku->judul= 'belajar PHP 2';
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        
        $buku->judul= 'belajar PHP 3';
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        
        $buku->judul= 'belajar PHP 4';
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        
        $buku->judul= 'belajar PHP 5';
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        
        $buku->judul= 'belajar PHP 6';
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        $buku->save();
    
    }
}
