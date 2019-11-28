<?php

namespace App\Http\Controllers;

use App\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('log')->only('index');
//        $this->middleware('subscribed')->except('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('races.index', ['races' => Race::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('races.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $race = new Race;
        $race->name = $request->name;
        $race->save();
        return redirect('races.show');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id)
    {
        return view('races.show', ['races' => Race::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        return view('races.edit', ['races' => Race::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $race = Race::find($id);
        $race->name = $request->name;
        $race->save();
        return redirect('races.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Race $race
     * @return \Illuminate\Http\Response
     */
    public function destroy(Race $race)
    {
        Race::destroy($id);
        return redirect('races.index');
    }
}
