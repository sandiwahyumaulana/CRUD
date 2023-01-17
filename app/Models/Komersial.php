<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komersial extends Model
{
    use HasFactory;

    protected $table = 'komersial';
    protected $primaryKey = 'id_komersial';
    
    protected $fillable = [
    	'id_komersial',
    	'gambar',
        'judul',
        'fasilitas',       
        'biaya'       
    ];
}
