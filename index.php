<?php

require 'vendor/autoload.php';

use CESANTOS\PHPSOLID\SRP\Report;
use CESANTOS\PHPSOLID\SRP\JsonReportFormatter;

# Single responsibility principle (Princípio da responsabilidade única)
$report = new JsonReportFormatter();
var_dump($report->format(new Report()));
