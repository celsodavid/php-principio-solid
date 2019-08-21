<?php


namespace CESANTOS\PHPSOLID\LSP;

class FileManager
{
    public function write($message)
    {
        return $message . __CLASS__ . PHP_EOL;
    }
}
