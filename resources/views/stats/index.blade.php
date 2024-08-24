<x-app-layout>
    <x-slot name="header">
        <h1>Estastícas</h1>
    </x-slot>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome do Jogador
                </th>
                <th scope="col" class="px-6 py-3">
                    Gols
                </th>
                <th scope="col" class="px-6 py-3">
                    Assistências
                </th>
                <th scope="col" class="px-6 py-3">
                    Cartão Amarelo
                </th>
                <th scope="col" class="px-6 py-3">
                    Cartão Vermelho
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>

</x-app-layout>
