<?php


namespace CESANTOS\PHPSOLID\DIP;

class Notificacao
{
    public function __construct()
    {
        $this->message = new Email();
    }

    public function enviar($message)
    {
        $this->message->enviar($message);
    }
}
