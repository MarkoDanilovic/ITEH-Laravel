<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Knjiga;

class Izdavac extends Model
{
    use HasFactory;

    public function knjige()
    {
        return $this->hasMany(Knjiga::class);
    }
}
