<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musica;

class MusicaController extends Controller
{
    public function index(){
        $musicas = Musica::orderBy('rank','asc')->paginate(10);

        return view('index', compact('musicas'));
    }

    public function create(){
        $musica = Musica::all();

        return view('cadastrar', compact('musica'));
    }

    public function store(Request $request){
        $musica = $request->all();
        Musica::create (['nome_musica'=> $musica['nome_musica'],
                         'nome_artista'=> $musica['nome_artista'],
                         'rank' => $musica['rank_musica']]);
        return redirect()->route('index');
    }

    public function delete($id=0){
        $musica = new Musica();
        $dados = $musica->find($id);
        $dados->delete();
    }
}
