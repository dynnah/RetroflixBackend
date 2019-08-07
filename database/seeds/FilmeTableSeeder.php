<?php

use App\Filme;
use Illuminate\Database\Seeder;

class FilmeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmes = new Filme;
        $filmes->titulo = 'Bonequinha de Luxo';
        $filmes->data = '13/11/1961';
        $filmes->duracao = '115 minutos';
        $filmes->save();

        $filmes = new Filme;
        $filmes->titulo = 'E o vento levou';
        $filmes->data = '01/01/1940';
        $filmes->duracao = '238 minutos';
        $filmes->save();

        $filmes = new Filme;
        $filmes->titulo = 'Cantando na chuva';
        $filmes->data = '30/06/1952';
        $filmes->duracao = '103 minutos';
        $filmes->save();
    }
}