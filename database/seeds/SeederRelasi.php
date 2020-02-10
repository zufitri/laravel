<?php

use Illuminate\Database\Seeder;

use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;
class SeederRelasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

		//membuat data Dosen
		$dosen = Dosen::create(array(
			'nama' => 'abdul musthafa',
			'nipd' => '1234567890'
		));

		# Informasi ketika mahasiswa telah diisi.
		$this->command->info('data dosen telah diisi!');

        $novay = Mahasiswa::create(array(
			'nama' => 'Noviyanto Rachmadi',
			'nim'  => '1015015072',
			'id_dosen' => $dosen->id
		 ));

		# Mahasiswa Kedua bernama Djaffar. Dengan NIM 1015015088.
		$dije = Mahasiswa::create(array(
			'nama' => 'Djaffar',
			'nim'  => '1015015088',
			'id_dosen' => $dosen->id
		
		));

		# Mahasiswa Ketiga bernama Puji Rahayu. Dengan NIM 1015015078.
		$ayu = Mahasiswa::create(array(
			'nama' => 'Puji Rahayu',
			'nim'  => '1015015078',
			'id_dosen' => $dosen->id
		));
		$this->command->info('Mahasiswa telah diisi!');


		# Ciptakan wali si $novay
		Wali::create(array(
			'nama'  => 'Achmad S',
			'id_mahasiswa' => $novay->id
		));
		# Ciptakan wali si $dije
		Wali::create(array(
			'nama'  => 'Entahlah',
			'id_mahasiswa' => $dije->id
		));
		# Ciptakan wali si $ayu
		Wali::create(array(
			'nama'  => 'Arianto',
			'id_mahasiswa' => $ayu->id
		));

		# Informasi ketika semua wali telah diisi.
		$this->command->info('Data mahasiswa dan wali telah diisi!');
		#membuat data tabel hobi
		$mandi_hujan = Hobi::create(array('hobi'=>'mandi hujan'));
		$baca_buku = Hobi::create(array('hobi'=>'Baca buku'));

		$novay->hobi()->attach($mandi_hujan->id);
		$novay->hobi()->attach($baca_buku->id);
		$dije->hobi()->attach($mandi_hujan->id);
		$ayu->hobi()->attach($baca_buku->id);
		$this->command->info('Mahasiswa beserta Hobi telah diisi!');
		
	}
    }

