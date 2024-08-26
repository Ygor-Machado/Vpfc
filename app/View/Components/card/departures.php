<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GameCard extends Component
{
    public $matchDate;
    public $location;
    public $homeTeamLogo;
    public $homeAbreviation;
    public $homeTeamScore;
    public $awayTeamLogo;
    public $awayAbreviation;
    public $awayTeamScore;

    public function __construct($matchDate, $location, $homeTeamLogo, $homeAbreviation, $homeTeamScore, $awayTeamLogo, $awayAbreviation, $awayTeamScore)
    {
        $this->matchDate = $matchDate;
        $this->location = $location;
        $this->homeTeamLogo = $homeTeamLogo;
        $this->homeAbreviation = $homeAbreviation;
        $this->homeTeamScore = $homeTeamScore;
        $this->awayTeamLogo = $awayTeamLogo;
        $this->awayAbreviation = $awayAbreviation;
        $this->awayTeamScore = $awayTeamScore;
    }

    public function render()
    {
        return view('components.game-card');
    }
}
