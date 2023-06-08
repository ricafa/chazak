<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        "descricao",
        "preco",
        "dias_vencimento",
        "empresas_id",
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
