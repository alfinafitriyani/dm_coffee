<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kopi extends Model
{
    use HasFactory;

    protected $table = 'kopis';

    protected $fillable = [
        'gambar',
        'nama',
        'deskripsi',
        'harga',
    ];
}
