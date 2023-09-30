<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    //set tabel
    protected $table='Tanggapan';
    
    //set primarykey
    protected $primaryKey = 'id_tanggapan';


    public $incrementing = false;


    //set data primary key

    //string kolom yang dapat diisi secara masal
    protected $guarded = [];
}
