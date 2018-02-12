<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Matkul;
class Matkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = ['nama_matkul','kkm'];
    
}
