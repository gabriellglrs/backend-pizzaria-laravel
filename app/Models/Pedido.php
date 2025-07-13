<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'funcionario_id',
        'data_pedido',
        'status',
        'valor_total',
    ];

    // Relacionamento: Pedido pertence a um Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento: Pedido pertence a um Funcionario (opcional, nullable)
    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

    // Relacionamento: Pedido tem muitos ItensPedido
    public function itensPedido()
    {
        return $this->hasMany(ItemPedido::class);
    }

    // Relacionamento: Pedido tem um Pagamento
    public function pagamento()
    {
        return $this->hasOne(Pagamento::class);
    }
}
