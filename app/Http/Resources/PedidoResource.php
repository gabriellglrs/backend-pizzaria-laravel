<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'cliente' => new ClienteResource($this->whenLoaded('cliente')),
            'funcionario' => new FuncionarioResource($this->whenLoaded('funcionario')),
            'data_pedido' => $this->data_pedido,
            'status' => $this->status,
            'valor_total' => $this->valor_total,
            'itens' => ItemPedidoResource::collection($this->whenLoaded('itensPedido')),
            'pagamento' => new PagamentoResource($this->whenLoaded('pagamento')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
