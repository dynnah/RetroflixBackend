@extends('layouts.app')

@section('title', 'Pedidos')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
<table>
<td><a href="{{ route('cliente.index') }}" class="btn btn-primary" role="button">Back</a></td>
</table>
<table class="table table-striped">
  <thead>
    <tr>
      <td>Id</td>
      <td>Data do Pedido</td>
      <td>Valor</td>
      <td colspan="2">Action</td>
    </tr>
  </thead>
  <tbody>
    @foreach($pedido as $pedido)
    <tr>
      <td>{{$pedido->id}}</td>
      <td>{{$pedido->data}}</td>
      <td>{{$pedido->valor}}</td>
      <td><a href="{{ route('cliente.pedido.edit', [$pedido->cliente_id, $pedido->id]) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="{{ route('cliente.pedido.destroy', [$pedido->cliente_id, $pedido->id])}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('cliente.pedido.create', $pedido->cliente_id) }}" class="btn btn-primary" role="button">Add Order</a>
@endsection