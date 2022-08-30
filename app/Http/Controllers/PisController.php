<?php

namespace App\Http\Controllers;

use App\Http\Resources\PisResource;
use App\Models\Pisac;
use Illuminate\Http\Request;

class PisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pis = Pisac::all();

        return PisResource::collection($pis);
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
     * @param  \App\Models\Pisac  $pisac
     * @return \Illuminate\Http\Response
     */
    public function show(Pisac $pisac)
    {
        return new PisResource($pisac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pisac  $pisac
     * @return \Illuminate\Http\Response
     */
    public function edit(Pisac $pisac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pisac  $pisac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pisac $pisac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pisac  $pisac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pisac $pisac)
    {
        $pisac->delete();
        return response()->json('Pisac je obrisan');
    }
}
