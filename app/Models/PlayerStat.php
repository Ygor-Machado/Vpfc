<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerStat extends Model
{
    use HasFactory;

    protected $fillable = [
      'player_id',
      'departure_id',
      'goals',
      'assists',
      'yellow_cards',
      'red_cards',
      'matches_played',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
