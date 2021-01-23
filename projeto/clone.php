<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();
$item1 = new ItemOrcamento();
$item1->valor = 423;
$item2 = new ItemOrcamento();
$item2->valor = 679;
$item3 = new ItemOrcamento();
$item3->valor = 3455;

//https://martinfowler.com/bliki/FluentInterface.html
$notaFiscal = $builder->paraEmpresa('123456', 'ATCorp')
        ->comItem($item1)
        ->comItem($item2)
        ->comItem($item3)
        ->comObservacoes('Esta Nota foi construida com um construtor')
        ->constroi();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento();

var_dump($notaFiscal2, $notaFiscal);
