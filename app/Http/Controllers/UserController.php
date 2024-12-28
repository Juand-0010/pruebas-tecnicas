<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Crear o actualizar un usuario
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,correo,' . $request->id,
            'saldo' => 'required|numeric|min:0',
        ]);

        $user = User::updateOrCreate(
            ['id' => $request->id], // Si existe, lo actualiza; si no, lo crea
            [
                'nombre' => $request->nombre,
                'correo' => $request->correo,
                'saldo' => $request->saldo,
            ]
        );

        return response()->json(['message' => 'Usuario guardado correctamente', 'user' => $user]);
    }
}
