<?php

namespace App\View\Components\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Departures extends Component
{
    public $matchDate;

    public $location;
    public $homeTeamLogo;
    public $homeAbreviation;
    public $homeTeamScore;
    public $awayTeamLogo;
    public $awayAbreviation;
    public $awayTeamScore;
    public $departureId;

    public function __construct($matchDate, $location, $homeTeamLogo, $homeAbreviation, $homeTeamScore, $awayTeamLogo, $awayAbreviation, $awayTeamScore,$departureId)
    {
        $this->matchDate = $matchDate;
        $this->location = $location;
        $this->homeTeamLogo = $homeTeamLogo;
        $this->homeAbreviation = $homeAbreviation;
        $this->homeTeamScore = $homeTeamScore;
        $this->awayTeamLogo = $awayTeamLogo;
        $this->awayAbreviation = $awayAbreviation;
        $this->awayTeamScore = $awayTeamScore;
        $this->departureId = $departureId;
    }

    public function render(): View|Closure|string
    {
        return view('components.card.departures');
    }
}
