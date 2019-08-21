<?php


namespace CESANTOS\PHPSOLID\DIP;

class Email implements MensagemInterface
{
    public function enviar($message)
    {
        echo $message . __CLASS__;
    }
}
