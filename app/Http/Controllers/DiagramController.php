<?php

namespace App\Http\Controllers;

use App\Models\Diagram;
use Illuminate\Http\Request;

class DiagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function show(Diagram $diagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagram $diagram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagram $diagram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagram  $diagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagram $diagram)
    {
        //
    }
}
