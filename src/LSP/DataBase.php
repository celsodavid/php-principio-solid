<?php


namespace CESANTOS\PHPSOLID\LSP;

class DataBase
{
    public function write($message)
    {
        return $message . __CLASS__ . PHP_EOL;
    }
}
