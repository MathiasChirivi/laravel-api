<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use App\Http\Requests\StoreTipeRequest;
use App\Http\Requests\UpdateTipeRequest;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show(Tipe $tipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipeRequest  $request
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipeRequest $request, Tipe $tipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        //
    }
}
