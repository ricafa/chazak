<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nascimento',
        'email',
        'celular',
        'empresas_id',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
