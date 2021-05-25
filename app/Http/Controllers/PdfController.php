<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdemServico;
use PDF;

class PdfController extends Controller
{
    public function geraPdf(){
        $ordens = OrdemServico::all();
    }

    public function exporCsv(){
        return 'exportacao';
    }
}
