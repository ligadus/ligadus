<?php

namespace App\Http\Controllers;

use Request;

class clienteController extends Controller {
    public function listar() {
        $data = date("Y-m-d");
        return view('listar')->with("data", $data);
    }
    
    public function listar2() {
        $nomes = array(1 => "Daniel",2 => "Rafael",3 => "Marcelo",4 => "Otavio");
        
        return view('listar2')->with('nomes',$nomes);
        
    }
    
    public function editar($id) {
        
        /*
        if (Request::has("id")) {
            $id = request::input("id");
        } else {
            $id = 0;
        }
         */

        //$id = Request::input("id", 0);
        
        // URL e Path
        $url = Request::url();
        $path = Request::path();

        //$id = Request::route("id");
        
        return view('editar')->with("id",$id)->with("url",$url)->with("path",$path);
    }
    
    public function novo() {
        if (view()->exists("novo")) {
            return view('novo');
        } else {
            return view('welcome');
        }
    }
}
