<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade',
        'preco_unitario',
    ];

    // Relacionamento: ItemPedido pertence a um Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    // Relacionamento: ItemPedido pertence a um Produto
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
