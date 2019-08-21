<?php


namespace CESANTOS\PHPSOLID\SRP;

class JsonReportFormatter
{
    public function format(Report $report)
    {
        return json_encode($report->getContent());
    }
}
