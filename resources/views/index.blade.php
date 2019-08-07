@extends('layout.base')
@section('title','Index')
@section('content')
    <div class="row">
        <table class="tabelademusicas">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Musica</th>
                    <th>Artista/Banda</th>
                    <th colspan="2" >Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($musicas as $musica)
                    <tr>
                        <td>{{ $musica->rank }}</td>
                        <td>{{ $musica->nome_musica }}</td>
                        <td>{{ $musica->nome_artista }}</td>
                        <td><a href="{{ route('delete', $musica->id) }}"> Deletar </a></td>
                        <td><a href="{{ route('edit', $musica->id) }}"> Edit </a></td>
                    </tr>
                @endforeach
                <tr> <td> <a href="{{ route('cadastrar') }}"> Cadastrar </a> </td> </tr>
            </tbody>
        </table>
       
    </div>
@endsection