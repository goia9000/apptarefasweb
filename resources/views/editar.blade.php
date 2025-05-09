@extends('layout');

@section('conteudo')
    <h2>Editar Tarefa</h2>

    <form action="{{route('atualizar', $tarefa->id)}}" method="POST">
        @method('put')
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="tarefa" value="{{ $tarefa->tarefa }}">
        </div>
        <div class="mt-4">
            <label><input type="radio" name="status" value="0" class="form-check-input" {{$tarefa->status == 0 ? 'checked':''}}> Pendente </label>
            <label><input type="radio" name="status" value="1" class="form-check-input" {{$tarefa->status == 1 ? 'checked':''}}> Concluido </label>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Salvar</button>
    </form>
    @endsection
