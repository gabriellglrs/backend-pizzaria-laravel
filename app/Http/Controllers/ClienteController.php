<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return ClienteResource::collection($clientes);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return new ClienteResource($cliente);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefone' => 'required|string|max:20',
            'endereco' => 'required|string|max:255',
        ]);

        $cliente = Cliente::create($data);

        return new ClienteResource($cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'email' => "sometimes|required|email|unique:clientes,email,$id",
            'telefone' => 'sometimes|required|string|max:20',
            'endereco' => 'sometimes|required|string|max:255',
        ]);

        $cliente->update($data);

        return new ClienteResource($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(['message' => 'Cliente deletado com sucesso.']);
    }
}
