<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $table = 'enderecos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'cliente_id'
    ];

}