<?php

namespace App\Http\Controllers;

use App\Models\AltaBaja;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Inicio extends Controller
{
    public function index() {
        $titulo = 'Inicio';
        $pago = AltaBaja:: where('tipo', '=', 'Pago')->sum('costo');
        $gasto = AltaBaja:: where('tipo', '=', 'Gasto')->sum('costo');
        return view('modules/inicio/index', compact('titulo','pago', 'gasto'));
    }
}
