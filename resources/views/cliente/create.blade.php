@extends('filme.layout')

@section('title', 'Create Movies')

@section('content')
<div class="card">
  <div class="card-header">
    Add Movies
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
    <form method="post" action="{{ route('filme.store') }}">
      <div class="form-group">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" />
      </div>
      <div class="form-group">
        <label for="data">Data de Lançamento:</label>
        <input type="text" class="form-control" id="data" name="data" />
      </div>
      <div class="form-group">
        <label for="duracao">Duração:</label>
        <input type="text" class="form-control" id="duracao" name="duracao" />
      </div>
      <button type="submit" class="btn btn-primary">Create Movies</button>
    </form>
  </div>
</div>
@endsection