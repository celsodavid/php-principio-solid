<?php

namespace CESANTOS\PHPSOLID\SRP;

class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2018-01-22';
    }

    public function getContent()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate()
        ];
    }
}
