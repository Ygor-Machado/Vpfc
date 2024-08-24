<x-app-layout>
    <x-slot name="header">
        <h1>Estatísticas</h1>
    </x-slot>

    <x-table.table :headers="['Nome', 'Número', 'Posição','']">
        @foreach($players as $player)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ $player->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $player->number }}
                </td>
                <td class="px-6 py-4">
                    {{ $player->position }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{route('players.edit', ['player' => $player->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{route('players.destroy', ['player' => $player->id])}}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este jogador?');">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-blue-600 dark:text-red-500 hover:underline">Deletar</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </x-table.table>

</x-app-layout>
