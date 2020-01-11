<?php
use App\Penerbit;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $penerbit= new Penerbit;
        $penerbit->nama= 'fitri';
        $penerbit->save();
        
    }
}
