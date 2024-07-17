<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    public function jugador ()
    {
        return $this->belongsTo(jugador::class);
    }

    public function partidos ()
    {
        return $this->belongsToMany(Partido::class);
    }

    public function presidente ()
    {
        return $this->hasOne(Presidente::class);
    }
}
