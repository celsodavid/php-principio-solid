<?php


namespace CESANTOS\PHPSOLID\LSP;

class DatabaseLogger extends Logger
{
    /**
     * @var DataBase
     */
    private $database;

    public function __construct(DataBase $dataBase)
    {
        $this->database = $dataBase;
    }

    public function writer($message)
    {
        echo $this->database->write($message);
    }
}
