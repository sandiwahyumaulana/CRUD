<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    
    protected $fillable = [
    	'id_pelanggan',
        'nama',
        'jenis_foto',
        'link_foto',
        'tanggal',
        'biaya'       
    ];
}
