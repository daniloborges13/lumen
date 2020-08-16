<?php

namespace App\Models;
namespace App\Http\Controllers;
use App\Models\EmpresaModel;
use Illuminate\Http\Request;

class CadastroEmpresaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    public function store(Request $request){ 
        $this->validate ($request, [ 
            'proprietario'=> 'required',
            'email' => 'required|email|unique:empresas',
            'senha'=> 'required',
            'nome_estabelecimento'=> 'required'
        ]); 
        return EmpresaModel::create($request->all());
    }

}