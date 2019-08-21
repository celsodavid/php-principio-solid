<?php

require 'vendor/autoload.php';

use CESANTOS\PHPSOLID\LSP\DataBase;
use CESANTOS\PHPSOLID\LSP\FileLogger;
use CESANTOS\PHPSOLID\LSP\DatabaseLogger;
use CESANTOS\PHPSOLID\LSP\FileManager;
use CESANTOS\PHPSOLID\OCP\Logger;
use CESANTOS\PHPSOLID\OCP\Txt;
use CESANTOS\PHPSOLID\OCP\Csv;
use CESANTOS\PHPSOLID\SRP\Report;
use CESANTOS\PHPSOLID\SRP\JsonReportFormatter;

# Single responsibility principle (Princípio da responsabilidade única)
$report = new JsonReportFormatter();
var_dump($report->format(new Report()));

# Open/closed principle (Princípio aberto/fechado)
$txt = new Logger(new Txt());
var_dump($txt->writer('Mensagem gerada pela classe '));

$csv = new Logger(new Csv());
var_dump($csv->writer('Arquivo gerado pela classe '));

#Liskov substitution principle(Princípio da Substituição de Liskov)
$fileLogger = new FileLogger(new FileManager());
$fileLogger->writer('meu log');

$databaseLogger = new DatabaseLogger(new DataBase());
$databaseLogger->writer('meu log');

# Interface segregation principle(Princípio da Segregação da Interface)

# Dependency inversion principle (Princípio da inversão da dependência)
