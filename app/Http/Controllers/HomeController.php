<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aniversariantes = Pessoa::filterAniversariante()->count();
        $totalMembros =  Pessoa::filterMembro()->count();
        $totalVisitantes = Pessoa::filterVisitante()->count();
        $totalVisitantesSemana = Pessoa::FilterVisitanteSemana()->count();
        return view('home', compact('aniversariantes', 'totalMembros','totalVisitantes','totalVisitantesSemana'));
  
    }
}
