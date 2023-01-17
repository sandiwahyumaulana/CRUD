<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potrait extends Model
{
    use HasFactory;

    protected $table = 'potrait';
    protected $primaryKey = 'id_potrait';
    
    protected $fillable = [
    	'id_potrait',
    	'gambar',
        'judul',
        'fasilitas',       
        'biaya'       
    ];
}
