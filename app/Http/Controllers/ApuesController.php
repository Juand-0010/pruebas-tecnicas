<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apuesta;
use App\Models\User;

class ApuestaController extends Controller
{
    // Crear una apuesta asociada a un usuario y un evento
    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:users,id',
            'evento_id' => 'required|exists:events,id',
            'monto' => 'required|numeric|min:0.01',
            'cuota' => 'required|numeric|min:1',
        ]);

        $user = User::find($request->usuario_id);
        if ($user->saldo < $request->monto) {
            return response()->json(['message' => 'Saldo insuficiente'], 400);
        }

        $user->saldo -= $request->monto; // Descontar monto
        $user->save();

        $bet = Apuesta::create([
            'usuario_id' => $request->usuario_id,
            'evento_id' => $request->evento_id,
            'monto' => $request->monto,
            'cuota' => $request->cuota,
        ]);

        return response()->json(['message' => 'Apuesta creada correctamente', 'apuesta' => $apuesta]);
    }

    // Listar apuestas de un usuario con filtros por estado
    public function listByUser(Request $request, $usuario_id)
    {
        $bets = Bet::where('usuario_id', $usuario_id)
                    ->when($request->estado, function ($query) use ($request) {
                        $query->where('estado', $request->estado);
                    })
                    ->get();

        return response()->json($apuesta);
    }

    // Actualizar el estado de una apuesta
    public function updateState(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,ganada,perdida',
        ]);

        $bet = Bet::findOrFail($id);
        $bet->estado = $request->estado;
        $bet->save();

        return response()->json(['message' => 'Estado de apuesta actualizado', 'apuesta' => $apuesta]);
    }
}
