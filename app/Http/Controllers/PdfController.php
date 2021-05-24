<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdemServico;
use PDF;

class PdfController extends Controller
{
    public function geraPdf(){
        $ordens = OrdemServico::all();
        $pdf = PDF::loadView('PDF.ordens', compact('ordens'));

        return $pdf->setPaper('a4')->stream('OrdensServicos.pdf');
    }
}
