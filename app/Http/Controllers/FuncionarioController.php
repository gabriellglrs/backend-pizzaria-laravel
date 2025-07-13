<?php

namespace App\Http\Controllers;

use App\Http\Resources\FuncionarioResource;
use App\Models\Funcionario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return FuncionarioResource::collection($funcionarios);
    }

    public function show($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return new FuncionarioResource($funcionario);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'email' => 'required|email|unique:funcionarios,email',
            'senha' => 'required|string|min:6',
        ]);

        // Opcional: hash da senha, mas depende do uso do sistema
        // $data['senha'] = bcrypt($data['senha']);

        $funcionario = Funcionario::create($data);

        return new FuncionarioResource($funcionario);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);

        $data = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'cargo' => 'sometimes|required|string|max:255',
            'email' => "sometimes|required|email|unique:funcionarios,email,$id",
            'senha' => 'sometimes|required|string|min:6',
        ]);

        $funcionario->update($data);

        return new FuncionarioResource($funcionario);
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return response()->json(['message' => 'Funcionário deletado com sucesso.']);
    }
}
