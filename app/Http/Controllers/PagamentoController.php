<?php

namespace App\Http\Controllers;

use App\Http\Resources\PagamentoResource;
use App\Models\Pagamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index()
    {
        $pagamentos = Pagamento::all();
        return PagamentoResource::collection($pagamentos);
    }

    public function show($id)
    {
        $pagamento = Pagamento::findOrFail($id);
        return new PagamentoResource($pagamento);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pedido_id' => 'required|exists:pedidos,id',
            'forma_pagamento' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
            'status' => 'required|string|max:255',
        ]);

        $pagamento = Pagamento::create($data);

        return new PagamentoResource($pagamento);
    }

    public function update(Request $request, $id)
    {
        $pagamento = Pagamento::findOrFail($id);

        $data = $request->validate([
            'pedido_id' => 'sometimes|required|exists:pedidos,id',
            'forma_pagamento' => 'sometimes|required|string|max:255',
            'valor' => 'sometimes|required|numeric|min:0',
            'status' => 'sometimes|required|string|max:255',
        ]);

        $pagamento->update($data);

        return new PagamentoResource($pagamento);
    }

    public function destroy($id)
    {
        $pagamento = Pagamento::findOrFail($id);
        $pagamento->delete();

        return response()->json(['message' => 'Pagamento deletado com sucesso.']);
    }
}
