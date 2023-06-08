<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoServico extends Model
{
    use HasFactory;

    protected $fillable = [
        'atendimentos_id',
        'servicos_id',
        'preco',
    ];


    public function atendimento()
    {
        return $this->belongsTo(Atendimento::class);
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }
}
