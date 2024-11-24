<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'Contato';

    public $fillable = ['ID','Nome','Email','Assunto','Mensagem'];

    public $timestamps = false;    
}