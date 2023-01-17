<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $table = 'studio';
    protected $primaryKey = 'id_studio';
    
    protected $fillable = [
    	'id_studio',
    	'gambar',
        'judul',
        'fasilitas',       
        'biaya'       
    ];
}
