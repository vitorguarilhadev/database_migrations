<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $table = 'clientes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'foto',
        'nome',
        'nome_mae',
        'data_nascimento',
        'cpf',
        'cns'
    ];

    public function endereco()
    {
        return $this->hasMany('App\Models\Enderecos','cliente_id','id');
    }

}