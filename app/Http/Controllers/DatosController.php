<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function __invoke(Request $request)
    {
          $nombres =[ ['nombre' => 'Nombre 1'],
                    ['nombre' => 'Nombre 2'],
                    ['nombre' => 'Nombre 3'],
                    ['nombre' => 'Nombre 4']
                    ];
        return view('datos', compact('nombres'));
    }
}
