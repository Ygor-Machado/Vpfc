<x-app-layout>
    <x-slot name="header">
        <h1>Registrar Estatísticas</h1>
    </x-slot>

    <form action="{{route('stats.store')}}" method="POST">
        @csrf

        <div class="mt-10 grid gap-6 mb-6 md:grid-cols-2">
            <div class="md:col-span-2">
                <x-form.label for="player_id">Estatísticas</x-form.label>
                <x-form.select
                    name="player_id"
                    :options="$players->pluck('name', 'id')"
                    required
                />
            </div>
            <div>
                <x-form.label for="goals">Gols</x-form.label>
                <x-form.input-store
                    type="number"
                    name="goals"
                    value="{{old('goals')}}"
                    required
                />
            </div>
            <div>
                <x-form.label for="assists">Assistências</x-form.label>
                <x-form.input-store
                    type="text"
                    name="assists"
                    value="{{old('assists')}}"
                    required
                />
            </div>
            <div>
                <x-form.label for="yellow_cards">Cartões Amarelos</x-form.label>
                <x-form.input-store
                    type="text"
                    name="yellow_cards"
                    value="{{old('yellow_cards')}}"
                    required
                />
            </div>
            <div>
                <x-form.label for="red_cards">Cartões Vermelhos</x-form.label>
                <x-form.input-store
                    type="text"
                    name="red_cards"
                    value="{{old('red_cards')}}"
                    required
                />
            </div>

            <div>
                <x-form.label for="red_cards">Partidas Jogadas</x-form.label>
                <x-form.input-store
                    type="number"
                    name="matches_played"
                    value="{{old('matches_played')}}"
                    required
                />
            </div>

        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

    </form>

</x-app-layout>
