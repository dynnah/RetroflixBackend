@extends('filme.layout')

@section('title', 'Filmes')

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
      <td>Título</td>
      <td>Data de Lançamento</td>
      <td>Duração</td>
      <td colspan="2">Action</td>
    </tr>
  </thead>
  <tbody>
    @foreach($filmes as $filme)
    <tr>
      <td>{{$filme->id}}</td>
      <td>{{$filme->titulo}}</td>
      <td>{{$filme->data}}</td>
      <td>{{$filme->duracao}}</td>
      <td><a href="{{ route('filme.edit', $filme->id) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="{{ route('filme.destroy', $filme->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('filme.create') }}" class="btn btn-primary" role="button">Add Movie</a>
@endsection