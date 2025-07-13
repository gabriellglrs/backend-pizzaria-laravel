<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos via mass assignment
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
    ];

    // Relacionamento: Cliente tem muitos Pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
