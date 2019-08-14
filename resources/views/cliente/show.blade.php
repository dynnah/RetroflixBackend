@extends('layouts.app')


@section('title', 'Pessoa')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>Endereco</td>
      <td>Telefone</td>
      <td>Cep</td>
      <td>Cpf</td>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{$pessoa->id}}</td>
      <td>{{$pessoa->nome}}</td>
      <td>{{$pessoa->endereco}}</td>
      <td>{{$pessoa->telefone}}</td>
      <td>{{$pessoa->cep}}</td>
      <td>{{$pessoa->cpf}}</td>
      </tr>
  </tbody>
</table>
      <h2>Animais</h2>
      @include('animal.index', ['animais' => $pessoa->animais])
      <h2>Consultas</h2>
      @include('consulta.index', ['consultas' => $pessoa->consultas])

      <a href="{{ route('pessoa.animal.create' , $pessoa->id)}}" class="btn btn-primary" role="button">Adicionar Animal </a>
      <a href="{{ route('pessoa.consulta.create' , $pessoa->id) }}" class="btn btn-primary" role="button">Agendar Consulta </a>

@endsection