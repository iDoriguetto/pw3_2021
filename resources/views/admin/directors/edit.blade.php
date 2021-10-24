@extends('admin.layout')
@section('title', 'Alteracao de Diretores')
@section('page-title', 'Alteracao de Diretores')
@section('content')
    <form method="post" action="{{route('directors.update', $director->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Nome</label>
            <input type="text" name="name" id="description" class="form-control" value="{{$director->name}}" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Salvar" class="btn btn-success">
            <a href="{{route('directors.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
