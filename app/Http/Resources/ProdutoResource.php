<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
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
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'disponivel' => (bool) $this->disponivel,
            'categoria' => new CategoriaResource($this->whenLoaded('categoria')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
