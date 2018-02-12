<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dosen;
class Dosen extends Model
{
     protected $table = 'dosen';
    protected $fillable = ['nipd','nama','matkul'];
    
}
