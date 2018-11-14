<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
   

    function agendas() {
        return view('agenda', ['agendas' => \App\Agenda::all()]);
    }
}
