<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empresa extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'logo',
        'tipo',
        'users_id',
    ];

    public function dono()
    {
        return $this->belongsTo(User::class);
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }

    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class);
    }

}
