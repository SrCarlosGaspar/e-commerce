<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagen extends Model
{
    protected $fillable = ['nome', 'email', 'assunto', 'mensagem'];
}
