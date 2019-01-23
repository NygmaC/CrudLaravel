<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ControllerCategoria extends Controller
{
    public function index() {
        $categorias = Categoria::all();
    	return view('categorias', ['categorias' => $categorias]);
    }

    public function setModalCadastro() {
        return view('modalCadastroCategoria');
    }

    public function setInsert(Request $request) {
        $ArrayParametros = $request['ArrayParametros'];
        $cat = new Categoria();
        $cat->setInsertCategoria($ArrayParametros);
        return redirect('/categorias');
    }

    public function setDelete($id) {
        $cat = new Categoria();
        $cat->setDeleteCategoria($id);
        return redirect('/categorias');
    }

    public function categoriasjson() {
        $categorias = Categoria::all();
    	return json_encode($categorias);
    }
    

}
