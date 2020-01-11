<?php
use App\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli= new Pembeli;
        $pembeli->judul='naruti';
        $pembeli->jumlah_buku=50;
        $pembeli->penerbit='fauzan';
        $pembeli->harga=1000;
        $pembeli->nama_pembeli='pulu puklu';
        $pembeli->save();
        
        

        //
    }
}
