<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

abstract class Venda
{
    public DateTimeInterface $dataRealizacao;

    public function __construct(DateTimeInterFace $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}