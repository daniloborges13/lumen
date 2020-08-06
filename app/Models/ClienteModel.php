<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class ClienteModel extends Model
{
    // Ai vc vai ter um array com todos os campos da sua tabela
    protected $fillable = [  
        'nome',
        'email', 
        'senha',
        'endereco',
        'numero',
        'bairro',
        'complemento',
        'celular'
    ];
    protected $table = 'clientes';

    public function setSenhaAttribute($value) {
        $this->attributes['senha'] = Hash::make($value);
    }
}

