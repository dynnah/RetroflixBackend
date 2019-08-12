@extends('cliente.layout')

@section('title', 'Edit Clientes')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Client
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="post" action="{{ route('cliente.update', $cliente->id) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" />
      </div>
      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}" />
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cliente->endereco }}" />
      </div>
      <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
  </div>
</div>
@endsection