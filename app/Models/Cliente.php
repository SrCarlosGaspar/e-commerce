<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','telefone', 'email', 'endereco', 'tipo_endereco', 'sessao'];
}
