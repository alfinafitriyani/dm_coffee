<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedangan extends Model
{
    use HasFactory;

    protected $table = 'wedangans';

    protected $fillable = [
        'gambar',
        'nama',
        'deskripsi',
        'harga',
    ];
}
