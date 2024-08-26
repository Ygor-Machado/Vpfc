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

    public function finished()
    {
        $departures = Departure::where('is_finished', true)->get();
        return view('departures.finished', compact('departures'));
    }

    public function upcoming()
    {
        $departures = Departure::where('is_finished', false)->get();
        return view('departures.upcoming', compact('departures'));
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
    public function store(DepartureStoreRequest $request, Departure $departure)
    {

        $data = $request->validated();

        $data['is_finished'] = $request->has('is_finished');

        if ($request->hasFile('home_team_logo') && $request->file('home_team_logo')->isValid()) {
            $data['home_team_logo'] = $this->uploadImage($request->file('home_team_logo'));
        }

        if ($request->hasFile('away_team_logo') && $request->file('away_team_logo')->isValid()) {
            $data['away_team_logo'] = $this->uploadImage($request->file('away_team_logo'));
        }

        $departure->create($data);

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
    public function update(DepartureUpdateRequest $request, Departure $departure)
    {
        $data = $request->validated();

        $data['is_finished'] = $request->has('is_finished');

        if ($request->hasFile('home_team_logo') && $request->file('home_team_logo')->isValid()) {
            $this->deleteOldImage(public_path('img/logos/' . $departure->home_team_logo));
            $data['home_team_logo'] = $this->uploadImage($request->file('home_team_logo'));
        }

        if ($request->hasFile('away_team_logo') && $request->file('away_team_logo')->isValid()) {
            $this->deleteOldImage(public_path('img/logos/' . $departure->away_team_logo));
            $data['away_team_logo'] = $this->uploadImage($request->file('away_team_logo'));
        }

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

    private function deleteOldImage($path)
    {
        if (file_exists($path)) {
            unlink($path);
        }
    }

    private function uploadImage($image)
    {
        $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $image->extension();
        $image->move(public_path('img/logos'), $imageName);

        return $imageName;
    }
}
