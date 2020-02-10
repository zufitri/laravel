<?php
use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gaji= new Gaji;
        $gaji->nip= 007;
        $gaji->nama='fauzan';
        $gaji->agama='islam';
        $gaji->jenis_kelamin='laki-laki';
        $gaji->alamat='taman cibaduyut indah';
        $gaji->jabatan='manager';
        $gaji->jam_kerja=150;


        $gaji->nip= 8080;
        $gaji->nama='abdullah';
        $gaji->agama='islam';
        $gaji->jenis_kelamin='laki-laki';
        $gaji->alamat='taman cibaduyut indah';
        $gaji->jabatan='sekretaris';
        $gaji->jam_kerja=100;


        $gaji->nip= 9090;
        $gaji->nama='fitri';
        $gaji->agama='islam';
        $gaji->jenis_kelamin='perempuan';
        $gaji->alamat='taman cibaduyut indah';
        $gaji->jabatan='staff';
        $gaji->jam_kerja=150;
        $gaji->save();

    }
}
