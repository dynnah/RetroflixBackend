@extends('layouts.app')

@section('title', 'Create Order')

@section('content')
<div class="card">
  <div class="card-header">
    Add Order
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
    <form method="post" action="{{ route('cliente.pedido.store', $cliente->id)}}">
      <div class="form-group">
        @csrf
        <label for="data">Data do Pedido:</label>
        <input type="text" class="form-control" id="data" name="data" />
      </div>
      <div class="form-group">
        <label for="data">Valor:</label>
        <input type="text" class="form-control" id="valor" name="valor" />
      </div>
      <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
  </div>
</div>
@endsection