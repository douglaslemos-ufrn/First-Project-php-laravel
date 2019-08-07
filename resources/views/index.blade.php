@extends('layout.base')
@section('title','Index')
@section('content')
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Musica</th>
                    <th>Artista/Banda</th>
                </tr>
            </thead>
            <tbody>
                @foreach($musicas as $musica)
                    <tr>
                        <td>{{ $musica->rank }}</td>
                        <td>{{ $musica->nome_musica }}</td>
                        <td>{{ $musica->nome_artista }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('cadastrar') }}"> Cadastrar </a>
    </div>
@endsection