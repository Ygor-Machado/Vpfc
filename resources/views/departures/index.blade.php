<x-app-layout>
    <x-slot name="header">
        <h1>Partidas</h1>
    </x-slot>

    <div class="container mx-auto p-4">
        <h1 class="text-white text-xl mb-4">Partidas</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($departures as $departure)
                <x-card.departures
                    :matchDate="$departure->match_date"
                    :location="$departure->location"
                    :homeTeamLogo="$departure->home_team_logo"
                    :homeAbreviation="$departure->home_abreviation"
                    :homeTeamScore="$departure->home_team_score"
                    :awayTeamLogo="$departure->away_team_logo"
                    :awayAbreviation="$departure->away_abreviation"
                    :awayTeamScore="$departure->away_team_score"
                />
            @endforeach
        </div>
    </div>
</x-app-layout>
