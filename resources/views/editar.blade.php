@extends('layout');

@section('conteudo')
    <h2>Editar Tarefa</h2>

    <form action="" method="POST">

        <div class="">
            <input type="text" class="form-control" name="tarefa">
        </div>
        <div class="mt-4">
            <label><input type="radio" name="status" value="0"> Pendente </label>
            <label><input type="radio" name="status" value="1"> Concluido </label>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Salvar</button>
    </form>
    @endsection
