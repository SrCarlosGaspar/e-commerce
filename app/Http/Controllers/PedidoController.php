<?php


namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Pedido_Produto;
use Illuminate\Http\Request;
use Session;

class PedidoController extends Controller
{

    public function listar_pedidos(Pedido $pedido)
    {
        $pedidos = $pedido->pedidos_pendente();
        return view('painel.pedidos.listar_pedidos', compact('pedidos'));
    }

    public function adicionar_carrinho(Request $request, Pedido $pedido, Pedido_Produto $pedido_produto)
    {
        $id_sessao = $request->session()->getId();
       $data['data'] = date('Y-m-d');
       $data['sessao'] = $id_sessao;
       
       $pedido_retorno = $pedido->create($data);
       $pedidos_produto['pedido_id']   = $pedido_retorno->id;
       $pedidos_produto['produto_id']  = $request->produto_id;
       $pedidos_produto['quant']       = $request->quant;
       
       $pedido_produto_retorno = $pedido_produto->create($pedidos_produto);
       $quant_total = $pedido_produto->sum('quant');
       $carrinho = $pedido->produtos_carrinho();
       
       
       return redirect('/carrinho');       
       
    }

    public function finalizar_pedido(Request $request, Pedido $pedido, Cliente $cliente)
    {
        $pedidos = Pedido::where('estado', 'Aberto')->get();
       
        $data['nome'] = $request->nome;
        $data['telefone'] = $request->telefone;
        $data['email'] = $request->email;
        $data['endereco'] = $request->endereco;
        $data['tipo_endereco'] = $request->tipo_endereco;
        $data['sessao'] = $request->session()->getId();
        $client = $cliente->create($data);    
        

        

        foreach($pedidos as $pedid){
            $ped = $pedido->find($pedid->id); 
            $data['estado']     = "Pendente";
            $data['cliente_id'] = $client->id;           
            $estado = $ped->update($data);
        }
        
        return redirect()->back();
        
        
    }

    public function eliminar($id)
    {
        $pedidoProduto = Pedido_Produto::find($id);
        $pedido = Pedido::find($pedidoProduto->pedido_id);
        if($pedidoProduto->delete() && $pedido->delete()){
            return redirect()->back();
        }
        
    }
}
