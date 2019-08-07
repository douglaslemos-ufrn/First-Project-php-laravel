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
        $dados = Musica::find($id)->delete();                 
        return redirect()->route('index');
    }

    public function edit($id){
        $dados = Musica::find($id);   
        return view('edit',compact('dados', 'id'));
    }

    public function Atualizar(Request $request, $id){
        $musica = $request->all();
        Musica::find($id)->update($musica);

        return redirect()->route('index');
    }


}
