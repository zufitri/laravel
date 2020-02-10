<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    //
	protected $fillable = array('nama'.'id_mahasiswa');
	public $timestamps = true;

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    public function mahasiswa() {
		return $this->belongsTo('App\Mahasiswa', 'id_mahasiswa');
	}
}
