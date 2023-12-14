<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function optionAnswer() {
        return $this->hasMany(OptionAnswer::class, 'pertanyaan_id', 'id');
    }
}
