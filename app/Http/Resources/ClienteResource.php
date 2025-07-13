<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
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
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // Você pode incluir pedidos se quiser:
            // 'pedidos' => PedidoResource::collection($this->whenLoaded('pedidos')),
        ];
    }
}
