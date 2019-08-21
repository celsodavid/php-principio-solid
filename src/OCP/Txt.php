<?php


namespace CESANTOS\PHPSOLID\OCP;

class Txt implements Writer
{
    public function write($message)
    {
        echo $message . __CLASS__;
    }
}
