@extends('pedido.layout')

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
      <td><a href="" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="" class="btn btn-primary" role="button">Add Order</a>
@endsection