<?php

namespace App\Enums;

abstract class FormaPagamento extends Enum
{
    const CARTAO_DE_CREDITO = 'credito';
    const CARTAO_DE_DEBITO = 'debito';
    const DINHEIRO = 'dinheiro';
    const PIX = 'pix';
}
