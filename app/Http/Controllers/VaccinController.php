<?php

namespace App\Http\Controllers;

use App\Models\Vaccin;
use Illuminate\Http\Request;

class VaccinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccins = Vaccin::latest()->paginate(4);

        return view('vaccins.index',compact('vaccins'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date_expiration' => 'required',
        ]);

        Vaccin::create($request->all());

        return redirect()->route('vaccins.index')
            ->with('success','Vaccin créé avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccin $vaccin)
    {
        return view('vaccins.show',compact('vaccin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccin $vaccin)
    {
        return view('vaccins.edit',compact('vaccin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccin $vaccin)
    {
        $request->validate([
            'name' => 'required',
            'nb_dose' => 'required',
            'date_expiration' => 'required',
        ]);

        $vaccin->update($request->all());

        return redirect()->route('vaccins.index')
            ->with('success','Vaccin mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccin $vaccin)
    {
        $vaccin->delete();

        return redirect()->route('vaccins.index')
            ->with('success','Vaccins supprimé avec succès');
    }
}
