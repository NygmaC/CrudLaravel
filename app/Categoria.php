<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function setInsertCategoria($ArrayParametros = array()) {
        $cat = new Categoria();
        $cat->cat_nome = $ArrayParametros['nomecategoria'];
        $cat->save();
        

    }

    public function setDeleteCategoria($id) {
        $categoria = Categoria::find($id);
        if(isset($categoria)){
            $categoria->delete();
           
        }
    }
}
