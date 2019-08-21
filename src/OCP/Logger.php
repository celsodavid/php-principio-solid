<?php


namespace CESANTOS\PHPSOLID\OCP;

class Logger
{
    private $logger;

    public function __construct(Writer $writer)
    {
        $this->logger = $writer;
    }

    public function writer($message)
    {
        return $this->logger->write($message);
    }
}
