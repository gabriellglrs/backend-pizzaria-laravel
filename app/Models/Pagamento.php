<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'forma_pagamento',
        'valor',
        'status',
    ];

    // Relacionamento: Pagamento pertence a um Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
