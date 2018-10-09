<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('painel.produto.produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.produto.novo_produto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   App\Models\Produto $produto
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produto $produto)
    {
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $dados['nome']      = $request->nome;
            $dados['preco']     = $request->preco;
            $dados['quant']     = $request->quant;
            $dados['descricao'] = $request->descricao;

            $nome            = $request->nome;
            $extensao        = $request->imagem->extension();            
            $nome            = md5($nome);
            $nome_imagem     = "{$nome}.{$extensao}";
            $dados['imagem'] = $nome_imagem;
            $upload          = $request->imagem->storeAs('produtos', $nome_imagem);

            if($upload){
               
                $retorno = $produto->cadastrar($dados);
                
                return redirect()->back();
                
            }else {
                
                return redirect()->back()->withInput();
                
            }
           
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        $product = Produto::find($produto->id);
        $produtos = Produto::all();
        return view('site.single', compact('product', 'produtos'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $product = Produto::find($produto->id);

        $subtitulo = "Editar Produto: {$product->nome}";
        
        return view('painel.produto.editar_produto', compact('product', 'subtitulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $product = Produto::find($produto->id);

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $dados['nome']      = $request->nome;
            $dados['preco']     = $request->preco;
            $dados['quant']     = $request->quant;
            $dados['descricao'] = $request->descricao;

            $nome            = $request->nome;
            $extensao        = $request->imagem->extension();            
            $nome            = md5($nome);
            $nome_imagem     = "{$nome}.{$extensao}";
            $dados['imagem'] = $nome_imagem;
            $upload          = $request->imagem->storeAs('produtos', $nome_imagem);

            if($upload){
               
                $retorno = $product->update($dados);
                
                return redirect()->back();
                
            }else {
                
                return redirect()->back()->withInput();
                
            }
           
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }

    public function search(Request $request)
    {
        $produtos = Produto::where('nome',$request->pesquisar_produto)->get();
        
        return view('painel.produto.produtos', compact('produtos'));
        
    }

    public function search_site(Request $request)
    {
        $produtos = Produto::where('nome',$request->nome)->first();
        
        $product = Produto::find($produtos->id);
        $produtos = Produto::all();
        return view('site.single', compact('product', 'produtos')); 
        
    }

    public function eliminar($id)
    {
        $produto = Produto::find($id);
        $retorno = $produto->delete();
        if($retorno){
  
            return redirect()->back();
            
        }
    }
}
