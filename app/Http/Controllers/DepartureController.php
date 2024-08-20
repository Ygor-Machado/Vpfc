<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartureStoreRequest;
use App\Http\Requests\DepartureUpdateRequest;
use App\Models\Departure;
use Illuminate\Http\Request;

class DepartureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departures = Departure::all();

        return view('departures.index', compact('departures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartureStoreRequest $request)
    {
        $data = $request->validated();

        Departure::create($data);

        return redirect()->route('departures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departure $departure)
    {
        return view('departures.show', compact('departure'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departure $departure)
    {
        return view('departures.edit', compact('departure'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departure $departure)
    {
        $data = $request->validated();

        $departure->update($data);

        return redirect()->route('departures.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departure $departure)
    {
        $departure->delete();

        return redirect()->route('departures.index');
    }
}
