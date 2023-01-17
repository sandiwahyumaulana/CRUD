<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosplay extends Model
{
    use HasFactory;

    protected $table = 'cosplay';
    protected $primaryKey = 'id_cosplay';
    
    protected $fillable = [
    	'id_cosplay',
    	'gambar',
        'judul',
        'fasilitas',       
        'biaya'       
    ];
}
