<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //Declarando o nome da tabela no banco de dados
    protected $table = 'clientes';

    //Declarando os campos da tabela.
    protected $fillable=['id','nome','endereco','telefone'];

}
