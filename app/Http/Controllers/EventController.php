<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Listar eventos deportivos con el total apostado y las apuestas asociadas
    public function index()
    {
        $events = Event::with(['bets' => function ($query) {
            $query->select('evento_id', \DB::raw('SUM(monto) as total_apostado'))
                  ->groupBy('evento_id');
        }])->get();

        return response()->json($events);
    }
}
