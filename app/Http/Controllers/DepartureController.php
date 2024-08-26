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
    public function store(Request $request, Departure $departure)
    {

        $departure->away_team_name = $request->away_team_name;
        $departure->home_team_name = $request->home_team_name;
        $departure->away_abreviation = $request->away_abreviation;
        $departure->home_abreviation = $request->home_abreviation;
        $departure->match_date = $request->match_date;
        $departure->location = $request->location;
        $departure->home_team_score = $request->home_team_score;
        $departure->away_team_score = $request->away_team_score;

        if($request->hasFile('home_team_logo') && $request->file('home_team_logo')->isValid()) {

            $requestImage = $request->home_team_logo;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/logos'), $imageName);

            $departure->home_team_logo = $imageName;

        }

        if($request->hasFile('away_team_logo') && $request->file('away_team_logo')->isValid()) {

            $requestImage = $request->away_team_logo;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/logos'), $imageName);

            $departure->away_team_logo = $imageName;

        }

        $departure->save();

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
