<x-app-layout>
    <x-slot name="header">
        <h1>Estatísticas</h1>
    </x-slot>

    <x-table.table :headers="['Nome do Jogador', 'Gols', 'Assistências', 'Cartões Amarelos', 'Cartões Vermelhos', 'Partidas Jogadas', '']">
        @foreach($stats as $stat)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ $stat->player->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $stat->goals }}
                </td>
                <td class="px-6 py-4">
                    {{ $stat->assists }}
                </td>
                <td class="px-6 py-4">
                    {{ $stat->yellow_cards }}
                </td>
                <td class="px-6 py-4">
                    {{ $stat->red_cards }}
                </td>

                <td class="px-6 py-4">
                    {{ $stat->matches_played }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{route('stats.edit', ['stat' => $stat->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{route('stats.destroy', ['stat' => $stat->id])}}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este jogador?');">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-blue-600 dark:text-red-500 hover:underline">Deletar</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </x-table.table>

</x-app-layout>
