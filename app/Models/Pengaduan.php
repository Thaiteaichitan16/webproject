<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
     //set tabel
     protected $table='pengaduan';
    
     //set primarykey
     protected $primaryKey = 'id_pengaduan';
 
 
     public $incrementing = false;
 
 
     //set data primary key
     protected $keyType = 'string';
 
     //string kolom yang dapat diisi secara masal
     protected $guarded = [];
}
