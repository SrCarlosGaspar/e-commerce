<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pedido extends Model
{
    protected $fillable = ['data', 'total', 'sessao', 'quant_total', 'estado', 'cliente_id'];

    public function produtos_carrinho()
    {
        $pedidos = DB::table('pedido__produtos')
            ->join('produtos', 'produtos.id', '=', 'pedido__produtos.produto_id')
            ->join('pedidos', 'pedidos.id', '=', 'pedido__produtos.pedido_id') 
            ->distinct()
            ->select('produtos.*', 'produtos.id as id_produto', 'pedidos.*', 'pedidos.id as id_pedido', 'pedido__produtos.quant as quant_car', 'pedido__produtos.id as id_ped_prod')    
            ->where('estado', 'Aberto')        
            ->get();
        return $pedidos;
    }

    public function pedidos_pendente()
    {
        $pedidos = DB::table('pedido__produtos')
            ->join('produtos', 'produtos.id', '=', 'pedido__produtos.produto_id')
            ->join('pedidos', 'pedidos.id', '=', 'pedido__produtos.pedido_id') 
            ->join('clientes', 'clientes.id', '=', 'pedidos.cliente_id')            
            ->select('produtos.*', 'produtos.id as id_produto','produtos.nome as nome_produto', 'pedidos.*', 'pedidos.id as id_pedido', 'pedido__produtos.quant as quant_car', 'pedido__produtos.id as id_ped_prod', 'clientes.*', 'clientes.nome as nome_cliente')    
            ->where('estado', 'Pendente') 
            ->distinct()       
            ->get();
        return $pedidos;
    }
}
