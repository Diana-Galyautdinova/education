<?php

namespace App\Http\Controllers;

use App\Theory;
use Illuminate\Http\Request;

class TheoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theories = Theory::paginate();

        return view('theory.index', ['theories' => $theories]);
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
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function show(Theory $theory)
    {
        return view('theory.show', ['theory' => $theory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function edit(Theory $theory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theory $theory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theory  $theory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theory $theory)
    {
        //
    }
}
