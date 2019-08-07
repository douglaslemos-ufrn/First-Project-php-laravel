<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $table = 'musicas';

    protected $fillable = [
        //fillable lista os atributos da tabela que poderam ser listados.

        'nome_musica', 'nome_artista', 'rank'
        
    ];
}
