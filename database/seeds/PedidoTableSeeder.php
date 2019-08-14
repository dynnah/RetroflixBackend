<?php

use App\Pedido;
use Illuminate\Database\Seeder;

class PedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pedidos = new Pedido;
        $pedidos->cliente_id = '1';
        $pedidos->data = '10/08/2019';
        $pedidos->valor = '35.00';
        $pedidos->save();

        $pedidos = new Pedido;
        $pedidos->cliente_id = '2';
        $pedidos->data = '11/08/2019';
        $pedidos->valor = '45.00';
        $pedidos->save();

        $pedidos = new Pedido;
        $pedidos->cliente_id = '3';
        $pedidos->data = '12/08/2019';
        $pedidos->valor = '55.00';
        $pedidos->save();

        
    }
}