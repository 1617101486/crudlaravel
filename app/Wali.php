<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\wali;
class Wali extends Model
{
    protected $table = 'wali';
    protected $fillable = ['nipd','nama'];
    
}
