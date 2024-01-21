<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensaje="Estos son mis trenes";
        $trains=Train::all();

        return view('trenes/index', 
        ['mensaje' => $mensaje, 'Train'=>$trains]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trenes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trenes=new Train;
        $trenes->name=$request->input('name');
        $trenes->passengers=$request->input('passengers');
        $trenes->year=$request->input('year');
        $trenes->tipo=$request->input('tipo');
        $trenes->save();

        return redirect('Train');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
