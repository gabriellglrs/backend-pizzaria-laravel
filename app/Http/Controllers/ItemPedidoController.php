<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemPedidoResource;
use App\Models\ItemPedido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemPedidoController extends Controller
{
    public function index()
    {
        $itens = ItemPedido::with('produto')->get();
        return ItemPedidoResource::collection($itens);
    }

    public function show($id)
    {
        $item = ItemPedido::with('produto')->findOrFail($id);
        return new ItemPedidoResource($item);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pedido_id' => 'required|exists:pedidos,id',
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'preco_unitario' => 'required|numeric|min:0',
        ]);

        $item = ItemPedido::create($data);

        return new ItemPedidoResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = ItemPedido::findOrFail($id);

        $data = $request->validate([
            'pedido_id' => 'sometimes|required|exists:pedidos,id',
            'produto_id' => 'sometimes|required|exists:produtos,id',
            'quantidade' => 'sometimes|required|integer|min:1',
            'preco_unitario' => 'sometimes|required|numeric|min:0',
        ]);

        $item->update($data);

        return new ItemPedidoResource($item);
    }

    public function destroy($id)
    {
        $item = ItemPedido::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item do pedido deletado com sucesso.']);
    }
}
