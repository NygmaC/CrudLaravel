<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function getProdutos() {
        $produtos = Produto::all();
        return $produtos;
    }

    public function insert($ArrayParametros = array()) {
        if($ArrayParametros['id'] != ''){
            $prod = Produto::find($ArrayParametros['id']);
        }else {
            $prod = new Produto();
        }
       
        $prod->prd_nome = $ArrayParametros['nome'];
        $prod->prd_preco = $ArrayParametros['preco'];
        $prod->prd_estoque = $ArrayParametros['quantidade'];
        $prod->cat_id = $ArrayParametros['categoriaproduto']; 
        $prod->save();

        return $prod;
    }

    public function deleteProduto($id) {
        $prod = Produto::find($id);
        if(isset($prod)) {
            $prod->delete();
        }
    }

    public function updateProduto($ArrayParametros, $id) {
        $prod = Produto::find($id);

        if(isset($prod)) {
            $prod->prd_nome = $ArrayParametros['nome'];
            $prod->prd_preco = $ArrayParametros['preco'];
            $prod->prd_estoque = $ArrayParametros['quantidade'];
            $prod->cat_id = $ArrayParametros['categoriaproduto']; 
            $prod->save();
        }
    }

    public function getProdutoByid($id) {
        $prod = Produto::find($id);
        if(isset($prod)) {
            return json_encode($prod);
        }
    }
}
