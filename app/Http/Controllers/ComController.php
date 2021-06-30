<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ComController extends Controller
{
    public function getAllComentarios()
    {
        $comentarios = Comentario::all();
        return view('comentario', compact('comentarios'));
    }

    public function downloadPDF()
    {
        $comentarios = Comentario::all();
        $pdf = PDF::loadView('comentario', compact('comentarios'));

        return $pdf->download('comentarios.pdf');
    }
}
