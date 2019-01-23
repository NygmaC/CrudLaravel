<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class ControllerProduto extends Controller
{
    public function indexView() {
    	return view('produtos');
    }

    public function getProdutos() {
        $produtos = new Produto();
        $prod = $produtos->getProdutos();
        return json_encode($prod);
    }

    public function setCadastro(Request $req) {
      
        $prod = new Produto();
        $produto = $prod->insert($req);
        return json_encode($produto);
    }

    public function delete($id) {
        $prod = new Produto();
        $prod->deleteProduto($id);
    }

    public function updateProduto(Request $req, $id) {
        $prod = new Produto();
        $prod->updateProduto($req, $id);
    }

    public function getProdutoByID($id){
        $prod = new Produto();
        $produto = $prod->getProdutoByid($id);
        return $produto;
    }
}
