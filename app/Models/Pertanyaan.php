<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan_1',
        'pertanyaan_2',
        'pertanyaa_3',
        'pertanyaa_4',
        'pertanyaa_5',
        'pertanyaa_6',
        'pertanyaa_7',
    ];
}
