<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    use HasFactory;

    protected $table = "configuracoes";

    protected $fillable = [
        'users_id',
        'cor_tema',
    ];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }
}
