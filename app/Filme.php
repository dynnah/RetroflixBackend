<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = [
        'id',
        'titulo',
        'data',
        'duracao'
    ];

    public function pedidos()
    {
        return $this->belongsTo('App\Pedido');
    }
}
