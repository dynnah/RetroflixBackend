@extends('cliente.layout')

@section('title', 'Clientes')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <td>Id</td>
      <td>Nome</td>
      <td>CPF</td>
      <td>Endereço</td>
      <td colspan="2">Action</td>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes as $cliente)
    <tr>
      <td>{{$cliente->id}}</td>
      <td>{{$cliente->nome}}</td>
      <td>{{$cliente->cpf}}</td>
      <td>{{$cliente->endereco}}</td>
      <td><a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="{{ route('cliente.destroy', $cliente->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('cliente.create') }}" class="btn btn-primary" role="button">Add Client</a>
@endsection