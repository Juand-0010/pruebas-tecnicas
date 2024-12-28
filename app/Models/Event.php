<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'fecha', 'tipo_deporte'];

    public function apuestas()
    {
        return $this->hasMany(Apuesta::class, 'evento_id');
    }
}
