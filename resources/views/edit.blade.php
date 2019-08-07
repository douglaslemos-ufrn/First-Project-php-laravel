@extends('layout.base')
@section('title','Edit')
@section('content')
    <h2> Editar Musica </h2>
    <form action="{{ route('update', $id) }}"  method="post">
        {{csrf_field()}}
        <div>
            <label>Nome da Musica</label>
            <input type="text" name="nome_musica"  value="{{$dados->nome_musica}}" placeholder="Nome da Musica">
        </div> 
        <div>
            <label>Nome do Artista</label>
            <input type="text" name="nome_artista"  value="{{$dados->nome_artista}}" placeholder="Nome do Artista">
        </div> 
        <div>
            <label>Rank</label>
            <input type="number" name="rank"  value="{{$dados->rank}}" placeholder="Nome do Artista">
        </div>

        <button type="submit"> Atualizar </button>
    
    </form>

@endsection