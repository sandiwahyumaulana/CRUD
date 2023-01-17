<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;

    protected $table = 'wedding';
    protected $primaryKey = 'id_wedding';
    
    protected $fillable = [
    	'id_wedding',
    	'gambar',
        'judul',
        'fasilitas',       
        'biaya'       
    ];
}
