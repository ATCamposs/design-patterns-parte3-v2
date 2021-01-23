<?php

use Alura\DesignPattern\Log\FileLogManager;
use Alura\DesignPattern\Log\StdoutLogManager;

require 'vendor/autoload.php';

$logManager = new StdoutLogManager();
$logManager->log('info', 'Testando Log Manager');

$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'Testando Log write');