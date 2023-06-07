<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identifikasipendapatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'permasalahan', 'penyebab', 'tanggapan'
    ];

}
