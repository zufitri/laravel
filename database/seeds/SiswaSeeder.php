<?php
use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa= new Siswa;
        $siswa->nama= 'gueinever';
        $siswa->nis= 5;
        $siswa->kelas= 'sebelas';
        $siswa->jurusan= 'tataboga';
        $siswa->alamat= 'jalan kenangan';
        $siswa->tgl_lahir= '2003-02-18';
       $siswa->save(); 
        
    }
}
