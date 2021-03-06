@extends('filme.layout')

@section('title', 'Edit Movies')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Movies
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
    <form method="post" action="{{ route('filme.update', $filmes) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $filmes->titulo }}" />
      </div>
      <div class="form-group">
        <label for="data">Data de Lançamento:</label>
        <input type="text" class="form-control" id="data" name="data" value="{{ $filmes->data }}" />
      </div>
      <div class="form-group">
        <label for="duracao">Duração:</label>
        <input type="text" class="form-control" id="duracao" name="duracao" value="{{ $filmes->duracao }}" />
      </div>
      <button type="submit" class="btn btn-primary">Update Movies</button>
    </form>
  </div>
</div>
@endsection