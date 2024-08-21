<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerStatStoreRequest;
use App\Http\Requests\PlayerUpdateRequest;
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

        return view('admin.stats.index', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.stats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerStatStoreRequest $request)
    {
        $data = $request->validated();

        PlayerStat::create($data);

        return redirect()->route('admin.stats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PlayerStat $stat)
    {
        return view('admin.stats.show', compact('stat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlayerStat $playerStat)
    {
        return view('admin.stats.edit', compact('playerStat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlayerUpdateRequest $request, PlayerStat $playerStat)
    {
        $data = $request->validated();

        $playerStat->update($data);

        return redirect()->route('admin.stats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlayerStat $playerStat)
    {
        $playerStat->delete();

        return redirect()->route('admin.stats.index');
    }
}
