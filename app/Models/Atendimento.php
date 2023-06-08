<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'dia',
        'forma_pagamento',
        'preco_total',
        'pago',
        'clientes_id',
        'empresas_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function atendimentoServicos()
    {
        return $this->hasMany(AtendimentoServico::class);
    }
}
