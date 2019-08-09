<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'endereco'
    ];

    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
