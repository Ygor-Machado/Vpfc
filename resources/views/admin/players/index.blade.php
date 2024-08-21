@extends('layouts.main')

@section('title', 'Jogadores')

@section('content')
    Só um teste mesmo

        <table class="table">

            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Posição</th>
                <th scope="col">Número</th>
            </tr>
            </thead>
            <tbody>

            @foreach($players as $player)
                <tr>
                    <th scope="row">{{ $player->name }}</th>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->number }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
@endsection
