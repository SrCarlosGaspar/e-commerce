<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produto extends Model
{
    protected $fillable = ['nome', 'imagem', 'preco', 'quant', 'descricao'];

    public function cadastrar($dados)
    {
        try{
            $produto = $this->create($dados);
            return $produto;
        }catch(Exception $ex){
            return null;
        }
    }

    public function editar($dados)
    {
        try{
            $produto = $this->update($dados);
            return $produto;
        }catch(Exception $ex){
            return null;
        }
    }

    public function produtos_novos()
    {
        $produtos = DB::table('produtos')
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();

        return $produtos;
    }
}
