@extends('cliente.layout')

@section('title', 'Create Client')

@section('content')
<div class="card">
  <div class="card-header">
    Add Client
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
    <form method="post" action="{{ route('cliente.store') }}">
      <div class="form-group">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" />
      </div>
      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" />
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" />
      </div>
      <button type="submit" class="btn btn-primary">Create Client</button>
    </form>
  </div>
</div>
@endsection