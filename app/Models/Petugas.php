<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    //set tabel
    protected $table='Petugas';
    
    //set primarykey
    protected $primaryKey = 'id_petugas';


    public $incrementing = false;


    //set data primary key

    //string kolom yang dapat diisi secara masal
    protected $guarded = [];
}

