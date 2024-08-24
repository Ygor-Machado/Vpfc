<x-app-layout>
    <x-slot name="header">
        <h1>Estatísticas</h1>
    </x-slot>

    <x-table.table :headers="['Nome do Jogador', 'Gols', 'Assistências', 'Cartões Amarelos', 'Cartões Vermelhos']">
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
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        @endforeach
    </x-table.table>

</x-app-layout>
