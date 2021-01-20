<?php

namespace App\Http\Controllers;

use App\Models\TopPage;
use Illuminate\Http\Request;

class TopPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagrams = Diagram::all();
        return view('top' ,['diagrams' => $diagrams]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('input');
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
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function show(TopPage $topPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function edit(TopPage $topPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopPage $topPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopPage  $topPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopPage $topPage)
    {
        //
    }
}
