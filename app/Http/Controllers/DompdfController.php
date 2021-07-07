<?php

namespace App\Http\Controllers;

use App\Models\Aine;
use App\Models\Cadet;
use PDF;

class DompdfController extends Controller
{
    public function generatePDF()
    {
        $nbreCadet = Cadet::count();
        $nbreAine = Aine::count();
        $j = 1;
        for ($i = 1; $i < $nbreCadet + 1; $i++) {
            $tab[$i] =  Aine::findOrFail($j);
            if ($j === $nbreAine) {
                $j = 1;
            } else {
                $j++;
            }
            $jumelage[1][$i] = $tab[$i];
            $tab2[$i] =  Cadet::findOrFail($i);
            $jumelage[0][$i] = $tab2[$i];
        }
        $cpt = 1;
        $pdf = PDF::loadView('jumelage.impression', compact('jumelage', 'cpt'))->setPaper('a4', 'landscape');
        return $pdf->download('jumelage.pdf');
    }

    public function genereatePdfAines()
    {
        $aines = Aine::all();

        $pdf = PDF::loadView('jumelage.impressionAines', compact('aines'))->setPaper('a4', 'landscape');

        return $pdf->download('aines.pdf');
    }

    public function genereatePdfCadet()
    {
        $cadets = Cadet::all();

        $pdf = PDF::loadView('jumelage.impressionCadet', compact('cadets'))->setPaper('a4', 'landscape');

        return $pdf->download('cadets.pdf');
    }
}
