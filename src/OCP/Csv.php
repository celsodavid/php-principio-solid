<?php


namespace CESANTOS\PHPSOLID\OCP;

class Csv implements Writer
{
    public function write($message)
    {
        echo $message . __CLASS__;
    }
}
