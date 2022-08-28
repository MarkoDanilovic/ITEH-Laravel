<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Izdavac;
use App\Models\Pisac;

class Knjiga extends Model
{
    use HasFactory;

    public function izdavac()
    {
        return $this->belongsTo(Izdavac::class);
    }

    public function pisac()
    {
        return $this->belongsTo(Pisac::class);
    }
}
