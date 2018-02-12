<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Siswa;

class Siswa extends Model{
	
     protected $table = 'siswa';
    protected $fillable = ['nama','jurusan','alamat'];
    

}
