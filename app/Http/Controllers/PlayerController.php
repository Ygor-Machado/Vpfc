<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerStoreRequest;
use App\Http\Requests\PlayerUpdateRequest;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::all();

        return view('admin.players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerStoreRequest $request)
    {
        $data = $request->validated();

        Player::create($data);

        return redirect()->route('admin.players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('admin.players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('admin.players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlayerUpdateRequest $request, Player $player)
    {
        $data = $request->validated();

        $player->update($data);

        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('players.index');
    }
}
