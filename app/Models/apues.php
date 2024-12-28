<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'evento_id', 'monto', 'cuota', 'estado'];

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'evento_id');
    }
}
