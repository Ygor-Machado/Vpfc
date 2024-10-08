<x-app-layout>
    <x-slot name="header">
        <h1>Criar Jogadores</h1>
    </x-slot>

    <x-form.label>
        Nome
    </x-form.label>

    <form action="{{route('players.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="mt-10 grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <x-form.label>Nome</x-form.label>
                    <x-form.input-store
                        type="text"
                        name="name"
                        value="{{old('name')}}"
                        required
                    />
                </div>
                <div>
                    <x-form.label>Número</x-form.label>
                    <x-form.input-store
                        type="number"
                        name="number"
                        value="{{old('number')}}"
                        required
                    />
                </div>
                <div class="mb-6">
                    <x-form.label>Posição</x-form.label>
                    <x-form.input-store
                        type="text"
                        name="position"
                        value="{{old('position')}}"
                        required
                    />
                </div>
                <div class="mb-6">
                    <x-form.label>Imagem</x-form.label>
                    <x-form.input-store
                        type="file"
                        name="image"
                        value="{{old('image')}}"
                    />
                </div>
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

    </form>

</x-app-layout>
