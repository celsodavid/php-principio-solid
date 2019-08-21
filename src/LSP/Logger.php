<?php


namespace CESANTOS\PHPSOLID\LSP;

class Logger
{
    public function writer($message)
    {
        return $message . __CLASS__;
    }
}
