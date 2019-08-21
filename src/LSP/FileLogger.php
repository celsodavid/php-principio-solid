<?php


namespace CESANTOS\PHPSOLID\LSP;

class FileLogger extends Logger
{
    /**
     * @var FileManager
     */
    private $fileManager;

    public function __construct(FileManager $fileManager)
    {
        $this->fileManager = $fileManager;
    }

    public function writer($message)
    {
        echo $this->fileManager->write($message);
    }
}
