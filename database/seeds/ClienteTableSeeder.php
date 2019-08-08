<?php

use App\Cliente;
use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = new Cliente;
        $clientes->nome = 'Helena Juliana';
        $clientes->cpf = '777.777.777-77';
        $clientes->endereco = 'Rua A';
        $clientes->save();

        $clientes = new Cliente;
        $clientes->nome = 'George Lucas';
        $clientes->cpf = '555.555.555-55';
        $clientes->endereco = 'Rua B';
        $clientes->save();

        $clientes = new Cliente;
        $clientes->nome = 'Valesca Bahia';
        $clientes->cpf = '333.333.333-33';
        $clientes->endereco = 'Rua C';
        $clientes->save();
    }
}