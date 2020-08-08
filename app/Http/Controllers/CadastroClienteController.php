<?php

namespace App\Models;
namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class CadastroClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    public function store(Request $request){ 
        $this->validate ($request, [
            'nome' => 'required',
            'email' => 'required|email|unique:clientes',
            'senha'=> 'required',
            'endereco'=> 'required',
            'numero'=> 'required',
            'bairro'=> 'required',
            'complemento'=> 'required',
            'celular'=> 'required'
        ]); 
        return ClienteModel::create($request->all());
    }

}