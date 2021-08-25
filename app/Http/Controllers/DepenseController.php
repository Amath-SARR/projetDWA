<?php

namespace App\Http\Controllers;
use App\Models\Depense;
use App\Models\Revenue;
use Illuminate\Http\Request;
class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #return view('depense.ajout');
        $depenses = Depense::all();
        return view('depense.show', compact('depenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depense.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depense=new Depense();
        $depense->mois=Revenue::get('mois')->last();//->last();
        $depense->idDepense=request('idDepense');
       // $depense->mois=1;//request('mois');
        $depense->montant=request('montant');
        $depense->date=request('date');
        $depense->categorieDepense=request('categorieDepense');
        $depense->description=request('description');
        //dd($depense->mois);
        //$request->depenses->save($depense);
        Depense::create($request->all());
        return redirect()->route('depense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function show(Depense $depense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function edit(Depense $depense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depense $depense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Depense  $depense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depense $depense)
    {
        //
    }
}
