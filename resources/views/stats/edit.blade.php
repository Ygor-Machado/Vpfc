<x-app-layout>
    <x-slot name="header">
        <h1>Editar Estatísticas</h1>
    </x-slot>

    <form action="{{ route('stats.update', $stat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mt-10 grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-form.label for="goals">Gols</x-form.label>
                <x-form.input-store
                    type="number"
                    name="goals"
                    value="{{ old('goals', $stat->goals) }}"
                />
            </div>
            <div>
                <x-form.label for="assists">Assistências</x-form.label>
                <x-form.input-store
                    type="number"
                    name="assists"
                    value="{{ old('assists', $stat->assists) }}"
                />
            </div>
            <div>
                <x-form.label for="yellow_cards">Cartões Amarelos</x-form.label>
                <x-form.input-store
                    type="number"
                    name="yellow_cards"
                    value="{{ old('yellow_cards', $stat->yellow_cards) }}"
                />
            </div>
            <div>
                <x-form.label for="red_cards">Cartões Vermelhos</x-form.label>
                <x-form.input-store
                    type="number"
                    name="red_cards"
                    value="{{ old('red_cards', $stat->red_cards) }}"
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

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Submit
        </button>
    </form>
</x-app-layout>
