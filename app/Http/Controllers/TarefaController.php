<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{

    public function index()
    {
        $tarefas = Tarefa::all();
        return view('index', compact('tarefas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tarefa' => 'required'
        ]);

        Tarefa::create([
            'tarefa' => $request->tarefa,
            'status' => 0
        ]);

        return redirect()->route('home.index');
    }

    public function edit(Tarefa $tarefa)
    {
        return view('editar', compact('tarefa'));
    }

    public function update(Request $request, Tarefa $tarefa)
    {
        $request->validate([
            'tarefa' => 'required',
            'status' => 'required'
        ]);

        $tarefa->update([
            'tarefa' => $request->tarefa,
            'status' => $request->status
        ]);

        return redirect()->route('home.index');
    }

    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('home.index');
    }
    public function statusUpdate (Tarefa $tarefa){
        $tarefa->status = !$tarefa->status;
        $tarefa->save();

        return response()->json('ok');
    }
}
