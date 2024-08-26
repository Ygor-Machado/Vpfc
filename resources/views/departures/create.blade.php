<x-app-layout>
    <x-slot name="header">
        <h1>Criar Partidas</h1>
    </x-slot>

    <x-form.label>
        Nome
    </x-form.label>

    <form action="{{route('departures.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mt-10 grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-form.label>Time da casa</x-form.label>
                <x-form.input-store
                    type="text"
                    name="home_team_name"
                    value="{{old('home_team_name')}}"
                    required
                />
            </div>
            <div>
                <x-form.label>Time visitante</x-form.label>
                <x-form.input-store
                    type="text"
                    name="away_team_name"
                    value="{{old('away_team_name')}}"
                    required
                />
            </div>
            <div class="mb-6">
                <x-form.label>Abreviação time da casa</x-form.label>
                <x-form.input-store
                    type="text"
                    name="home_abreviation"
                    value="{{old('home_abreviation')}}"
                    required
                />
            </div>
            <div class="mb-6">
                <x-form.label>Abreviação time visitante</x-form.label>
                <x-form.input-store
                    type="text"
                    name="away_abreviation"
                    value="{{old('away_abreviation')}}"
                />
            </div>

            <div class="mb-6">
                <x-form.label>Data do jogo</x-form.label>
                <x-form.input-store
                    type="text"
                    name="match_date"
                    value="{{old('match_date')}}"
                />
            </div>

            <div class="mb-6">
                <x-form.label>Local</x-form.label>
                <x-form.input-store
                    type="text"
                    name="location"
                    value="{{old('location')}}"
                />
            </div>

            <div class="mb-6">
                <x-form.label>Gols time da casa</x-form.label>
                <x-form.input-store
                    type="number"
                    name="home_team_score"
                    value="{{old('home_team_score')}}"
                />
            </div>

            <div class="mb-6">
                <x-form.label>Gols time visitante</x-form.label>
                <x-form.input-store
                    type="number"
                    name="away_team_score"
                    value="{{old('away_team_score')}}"
                />
            </div>

            <div class="mb-6">
                <x-form.label>Logo time da casa</x-form.label>
                <x-form.input-store
                    type="file"
                    name="home_team_logo"
                    value="{{old('home_team_logo')}}"
                />
            </div>

            <div class="mb-6">
                <x-form.label>Logo time visitante</x-form.label>
                <x-form.input-store
                    type="file"
                    name="away_team_logo"
                    value="{{old('away_team_logo')}}"
                />
            </div>

            <div class="mb-6">
                <x-form.label>Partida terminada?</x-form.label>
                <div class="flex items-center mb-4">
                    <input id="default-checkbox" name="checkbox" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
            </div>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

    </form>

</x-app-layout>
