<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'position',
      'number',
      'image'
    ];

    public function stats()
    {
        return $this->hasOne(PlayerStat::class);
    }
}
