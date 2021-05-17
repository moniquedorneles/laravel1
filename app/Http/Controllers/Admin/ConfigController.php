<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $user = $request->user();
        $nome = $user->name;

        if(Gate::allows('see-form')) {
            echo "ESTE USUÁRIO PODE ACESSAR O FORMULÁRIO!";
        } else {
            echo "ESTE USUÁRIO NÃO PODE ACESSAR O FORMULÁRIO!";
        }
    
        $idade = 19;

        $data = [
            'nome'=>$nome,
            'idade'=>$idade,
            /*'estado'=>$estado,
            'cidade'=>$cidade,
            'escolaridade'=>$escolaridade,*/
            'showForm'=>Gate::allows('see-form')

        ];
        
        return view('admin.config', $data);
    }

    public function info(){

        return view('admin.info');
    }
    public function permissoes() {

        echo "Você Possui permissão!";
    }
}