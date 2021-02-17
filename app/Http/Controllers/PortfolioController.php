<?php

namespace App\Http\Controllers;

use App\Proyect;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    /**
     * Display a listing of proyectos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $proyectos =Proyect::paginate();
             return view('portfolio', compact('proyectos'));
    }

  
    public function show($id)
    {
        
        $proyecto = Proyect::FindOrFail($id);

        return view('show',compact('proyecto'));
    }

   
}
