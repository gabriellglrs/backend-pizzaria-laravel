<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FuncionarioResource extends JsonResource
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
            'cargo' => $this->cargo,
            'email' => $this->email,
            // cuidado para não expor senha!
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // 'pedidos' => PedidoResource::collection($this->whenLoaded('pedidos')),
        ];
    }
}
