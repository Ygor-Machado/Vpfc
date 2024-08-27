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

        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerStoreRequest $request)
    {
        $data = $request->all();

        $player = new Player($data);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $player->image = $this->uploadImage($request->file('image'));
        }

        $player->save();

        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlayerUpdateRequest $request, Player $player)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remove a imagem antiga se existir
            $this->deleteOldImage($player->image);

            // Faz o upload da nova imagem
            $data['image'] = $this->uploadImage($request->file('image'));
        }
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

    private function uploadImage($image)
    {
        $imageName = md5($image->getClientOriginalName() . microtime()) . '.' . $image->extension();
        $image->move(public_path('img/players'), $imageName);

        return $imageName;
    }

    private function deleteOldImage($imageName)
    {
        if ($imageName && file_exists(public_path('img/players/' . $imageName))) {
            unlink(public_path('img/players/' . $imageName));
        }
    }
}
