<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo', 'saldo'];

    public function bets()
    {
        return $this->hasMany(Bet::class, 'usuario_id');
    }
}