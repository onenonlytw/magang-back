<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letterin extends Model
{
    use HasFactory;

    protected $fillable = [
        'noterima',
        'tglditerima',
        'jamditerima',
        'dari',
        'nosurat',
        'tglsurat',
        'nd',
        'perihal',
        'pberwenang',
        'jenisurat',
        'kepada',
        'notatindakan',
        'tgldisposisi',
        'catatanevp',
        'catatandevp',
        'catatanosm',
        'upimage',
    ];

}
