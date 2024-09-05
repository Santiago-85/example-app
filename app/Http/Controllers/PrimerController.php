<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PrimerController extends Controller
{
    public function index()
    {
        return view('mis-views.primer-view', [
            'texto' => 'Hola Mundo'
        ]);
    }

    public function mostrarTexto($texto)
    {
        return view('mis-views.primer-view', [
            'texto' => $texto
        ]);
    }
}
