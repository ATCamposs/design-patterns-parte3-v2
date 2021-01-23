<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

class VendaProduto extends Venda
{
    /** @var int Peso em gramas */
    private int $pesoProduto;

    public function __construct(DateTimeInterFace $dataRealizacao, int $pesoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;
    }
}