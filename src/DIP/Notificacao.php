<?php


namespace CESANTOS\PHPSOLID\DIP;

class Notificacao
{
    public function __construct(MensagemInterface $mensagem)
    {
        $this->message = $mensagem;
    }

    public function enviar($message)
    {
        $this->message->enviar($message);
    }
}
