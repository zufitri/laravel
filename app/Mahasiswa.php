<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = array('nama', 'nim','id_dosen');
    public $timestamps = true;
    public function wali()
    {
        return $this->hasOne('App\Wali','id_mahasiswa');
    }
    public function dosen()
    {
        return $this->belongsTo('App\Dosen','id_dosen');
    }

    public function hobi() {
        return $this->belongsToMany
        ('App\Hobi', //table mahasiswa hobi
         'mahasiswa_hobi',//foreign key table untuk masing masing table
         'id_mahasiswa',//foreign key table untuk masing masing table
         'id_hobi'
         );
	}

}
