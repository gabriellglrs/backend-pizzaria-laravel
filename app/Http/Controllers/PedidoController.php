<?php

namespace App\Http\Controllers;

use App\Http\Resources\PedidoResource;
use App\Models\Pedido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with(['cliente', 'funcionario', 'itensPedido.produto', 'pagamento'])->get();
        return PedidoResource::collection($pedidos);
    }

    public function show($id)
    {
        $pedido = Pedido::with(['cliente', 'funcionario', 'itensPedido.produto', 'pagamento'])->findOrFail($id);
        return new PedidoResource($pedido);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'funcionario_id' => 'nullable|exists:funcionarios,id',
            'data_pedido' => 'required|date',
            'status' => 'required|string|max:255',
            'valor_total' => 'required|numeric|min:0',
        ]);

        $pedido = Pedido::create($data);

        return new PedidoResource($pedido);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);

        $data = $request->validate([
            'cliente_id' => 'sometimes|required|exists:clientes,id',
            'funcionario_id' => 'nullable|exists:funcionarios,id',
            'data_pedido' => 'sometimes|required|date',
            'status' => 'sometimes|required|string|max:255',
            'valor_total' => 'sometimes|required|numeric|min:0',
        ]);

        $pedido->update($data);

        return new PedidoResource($pedido);
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return response()->json(['message' => 'Pedido deletado com sucesso.']);
    }
}
