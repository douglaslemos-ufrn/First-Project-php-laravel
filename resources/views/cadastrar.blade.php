@extends('layout.base')
@section('title','Cadastrar')
@section('content')
    <h2> Cadastrar Musica </h2>
    <form action="{{ route('salvar') }}"  method="post">
        {{csrf_field()}}
        <div>
            <label>Nome da Musica</label>
            <input type="text" name="nome_musica"  placeholder="Nome da Musica">
        </div> 
        <div>
            <label>Nome do Artista</label>
            <input type="text" name="nome_artista" placeholder="Nome do Artista">
        </div> 
        <div>
            <label>Rank</label>
            <input type="number" name="rank_musica" placeholder="Nome do Artista">
        </div>

        <button type="submit"> Salvar </button>
    
    </form>

@endsection