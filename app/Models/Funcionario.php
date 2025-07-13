<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cargo',
        'email',
        'senha',
    ];

    // Relacionamento: Funcionario tem muitos Pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
