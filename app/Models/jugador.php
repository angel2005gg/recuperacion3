<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;
    public function equipos ()
    {
        return $this->hasMany(Equipo::class);
    }

    public function gols ()
    {
        return $this->hasMany(Gol::class);
    } 
}
