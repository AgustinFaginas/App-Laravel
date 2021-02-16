<?php

namespace App\Http\Controllers;

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
         $proyectos =[ ['Proyecto' => 'Proyecto 1'],
                    ['Proyecto' => 'Proyecto  2'],
                    ['Proyecto' => 'Proyecto  3'],
                    ['Proyecto' => 'Proyecto  4']
                    ];
             return view('portfolio', compact('proyectos'));
    }

    /**
     * Show the form for creating a new proyecto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created proyecto in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified proyecto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified proyecto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified proyecto in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified proyecto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
