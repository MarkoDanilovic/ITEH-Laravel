<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Izdavac;
use App\Models\Pisac;

class Knjiga extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'zanr',
        'pismo',
        'povez',
        'broj_strana',
        'cena',
        'pisac_id',
        'izdavac_id'
    ];

    public function izdavac()
    {
        return $this->belongsTo(Izdavac::class);
    }

    public function pisac()
    {
        return $this->belongsTo(Pisac::class);
    }
}
