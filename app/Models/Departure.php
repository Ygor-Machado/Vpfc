<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
    use HasFactory;

    protected $fillable = [
        'match_date',
        'location',
        'home_team_name',
        'away_team_name',
        'home_abreviation',
        'away_abreviation',
        'home_team_logo',
        'away_team_logo',
        'home_team_score',
        'away_team_score',
        'is_finished'
    ];

}
