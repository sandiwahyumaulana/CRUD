<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'group';
    protected $primaryKey = 'id_group';
    
    protected $fillable = [
    	'id_group',
    	'gambar',
        'judul',
        'fasilitas',       
        'biaya'       
    ];
}
