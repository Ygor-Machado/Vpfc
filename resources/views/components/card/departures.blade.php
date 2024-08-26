<div class="bg-white shadow-md rounded-lg overflow-hidden relative">
    <a href="{{ route('departures.edit', ['departure' => $departureId]) }}" class="absolute top-2 right-2 text-blue-500 hover:text-blue-700">
        Editar
    </a>

    <div class="text-center p-4">
        <p class="text-gray-500 text-sm">{{ $matchDate }}</p>
        <p class="text-gray-700 font-semibold">{{ $location }}</p>
    </div>

    <div class="flex justify-between items-center px-4 py-2">
        <div class="flex flex-col items-center">
            <img src="/img/logos/{{$homeTeamLogo}}" alt="" class="h-12 w-12 rounded-full">
            <p class="text-black text-md uppercase font-bold mt-2">{{ $homeAbreviation }}</p>
        </div>

        <div class="text-center">
            <p class="text-2xl font-bold text-black">{{ $homeTeamScore }} - {{ $awayTeamScore }}</p>
            <span class="text-sm text-gray-500">Resultado</span>
        </div>

        <div class="flex flex-col items-center">
            <img src="/img/logos/{{$awayTeamLogo}}" alt="" class="h-12 w-12 rounded-full">
            <p class="text-black text-md uppercase font-bold mt-2">{{ $awayAbreviation }}</p>
        </div>
    </div>
</div>
