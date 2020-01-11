<?php
use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $buku= new Buku;
        $buku->judul= 'belajar PHP 2';
        $buku->jumlah_halaman=50;
        $buku->penerbit='grade perpustaakan';
        $buku->synopsis='ini adalah.......';//untuk kata yang panjang
        $buku->status=1;
        $buku->save();
    }
}
