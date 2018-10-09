<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido_Produto extends Model
{
    protected $fillable = ['produto_id', 'pedido_id', 'quant'];
}
