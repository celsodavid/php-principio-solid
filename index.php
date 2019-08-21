<?php

require 'vendor/autoload.php';

use CESANTOS\PHPSOLID\SRP\Report;
use CESANTOS\PHPSOLID\SRP\JsonReportFormatter;
use CESANTOS\PHPSOLID\OCP\Logger;
use CESANTOS\PHPSOLID\OCP\Txt;
use CESANTOS\PHPSOLID\OCP\Csv;

# Single responsibility principle (Princípio da responsabilidade única)
$report = new JsonReportFormatter();
var_dump($report->format(new Report()));

# Open/closed principle (Princípio aberto/fechado)
$txt = new Logger(new Txt());
var_dump($txt->writer('Mensagem gerada pela classe '));

$csv = new Logger(new Csv());
var_dump($csv->writer('Arquivo gerado pela classe '));
