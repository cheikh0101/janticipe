<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class DompdfController extends Controller
{
    public function generatePDF()
    {
        $pdf = PDF::loadView('jumelage.test')->setPaper('a4', 'landscape');
        return $pdf->download('jumelage.pdf');
    }
}
