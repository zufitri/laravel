<?php
use App\Penjual;
use Illuminate\Database\Seeder;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $penjual= new Penjual;
        $penjual->judul= 'orang ke tiga';
        $penjual->jumlah_buku= 50;
        $penjual->penerbit= 'kuyang';
        $penjual->nama_penjual= 'cherry';
       $penjual->save(); 
        
        //
    }
}
