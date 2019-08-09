<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'id',
        'data',
        'valor'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
