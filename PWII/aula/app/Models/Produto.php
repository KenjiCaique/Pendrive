<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';

    public $fillable = ['id','nome','id_categoria','descricao','preco','qunatidade_em_estoque','data_cadastro'];

    public $timestamps = false; 
}
