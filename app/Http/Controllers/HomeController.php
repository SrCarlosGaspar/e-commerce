<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\Pedido_Produto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Produto $produto)
    {
        $produtos = Produto::all();
        $novos = $produto->produtos_novos();
        return view('site.index', compact('produtos', 'novos'));
    }

    public function sobre()
    {
        return view('site.sobre');
    }

    public function contacto()
    {
        return view('site.contacto');
    }
    
    public function produtos()
    {
        $produtos = Produto::all();
        return view('site.produtos', compact('produtos'));
    }

    public function carrinho(Pedido $pedido, Pedido_Produto $pedido_produto)
    {
        $quant_total = $pedido_produto->sum('quant');
        $produtos = $pedido->produtos_carrinho();
        return view('site.carrinho', compact('quant_total','produtos'));
    }

    public function home()
    {
        return view('home');
    }
}
