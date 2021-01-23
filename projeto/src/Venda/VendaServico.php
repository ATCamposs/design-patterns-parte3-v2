<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(DateTimeInterFace $dataRealizacao, string $nomePrestador)
    {
        parent::__construct($dataRealizacao);
        $this->nomePrestador = $nomePrestador;
    }
}