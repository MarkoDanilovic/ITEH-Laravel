<?php

namespace App\Http\Controllers;

use App\Http\Resources\IzdResource;
use App\Models\Izdavac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IzdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izd = Izdavac::all();
        return IzdResource::collection($izd);
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
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function show(Izdavac $izdavac)
    {
        return new IzdResource($izdavac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function edit(Izdavac $izdavac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Izdavac $izdavac)
    {
        $validator = Validator::make($request->all(), [
            'firma' => 'required|string',
            'adresa' => 'required|string',
            'grad' => 'required|string',
            'sajt' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $izdavac->firma = $request->firma;
        $izdavac->adresa = $request->adresa;
        $izdavac->grad = $request->grad;
        $izdavac->sajt = $request->sajt;

        $izdavac->save();

        return response()->json('Izdavac izmenjen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Izdavac $izdavac)
    {
        //
    }
}
