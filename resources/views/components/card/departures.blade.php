<div class="bg-white shadow-md rounded-lg overflow-hidden relative">
    <div class="absolute top-2 left-2">
        <form action="{{ route('departures.destroy', ['departure' => $departureId]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 hover:text-red-700">
                Deletar
            </button>
        </form>
    </div>

    <a href="{{ route('departures.edit', ['departure' => $departureId]) }}" class="absolute top-2 right-2 text-blue-500 hover:text-blue-700">
        Editar
    </a>

    <div class="text-center p-4 border-b border-gray-200">
        <p class="text-gray-500 text-sm">{{ $matchDate }}</p>
        <p class="text-gray-700 font-semibold">{{ $location }}</p>
    </div>

    <div class="flex justify-between items-center px-6 py-4">
        <div class="flex flex-col items-center">
            <img src="/img/logos/{{$homeTeamLogo}}" alt="Home Team Logo" class="h-16 w-16 rounded-full border border-gray-300 object-cover">
            <p class="text-black text-md uppercase font-bold mt-2">{{ $homeAbreviation }}</p>
        </div>

        <div class="text-center">
            <p class="text-3xl font-bold text-black">{{ $homeTeamScore }} - {{ $awayTeamScore }}</p>
            <span class="text-sm text-gray-500">Resultado</span>
        </div>

        <div class="flex flex-col items-center">
            <img src="/img/logos/{{$awayTeamLogo}}" alt="Away Team Logo" class="h-16 w-16 rounded-full border border-gray-300 object-cover">
            <p class="text-black text-md uppercase font-bold mt-2">{{ $awayAbreviation }}</p>
        </div>
    </div>
</div>
