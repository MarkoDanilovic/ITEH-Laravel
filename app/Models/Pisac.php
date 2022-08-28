<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Knjiga;

class Pisac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'drzava',
        'broj_knjiga',
    ];

    public function knjige()
    {
        return $this->hasMany(Knjiga::class);
    }
}
