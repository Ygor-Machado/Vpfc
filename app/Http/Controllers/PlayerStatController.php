<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerStatStoreRequest;
use App\Http\Requests\PlayerStatUpdateRequest;
use App\Http\Requests\PlayerUpdateRequest;
use App\Models\Player;
use App\Models\PlayerStat;
use Illuminate\Http\Request;

class PlayerStatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = PlayerStat::with('player')->get();

        return view('stats.index', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $players = Player::all();

        return view('stats.create', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerStatStoreRequest $request)
    {
        $data = $request->all();

        PlayerStat::create($data);

        return redirect()->route('stats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PlayerStat $stat)
    {
        return view('stats.show', compact('stat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlayerStat $stat)
    {
        $players = Player::all();
        return view('stats.edit', compact('stat', 'players'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlayerStatUpdateRequest $request, PlayerStat $stat)
    {
        $data = $request->all();

        $stat->update($data);

        return redirect()->route('stats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, PlayerStat $stat)
    {
        $stat->delete();

        return redirect()->route('stats.index');
    }
}
