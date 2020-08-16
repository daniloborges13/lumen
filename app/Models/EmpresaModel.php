<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class EmpresaModel extends Model{
    // Ai vc vai ter um array com todos os campos da sua tabela
    protected $fillable = [  
        'proprietario',
        'email', 
        'senha',
        'nome_estabelecimento'
    ];
    protected $table = 'empresas';

    public $timestamps = false;

    public function setSenhaAttribute($value) {
        $this->attributes['senha'] = Hash::make($value);
    }
}

