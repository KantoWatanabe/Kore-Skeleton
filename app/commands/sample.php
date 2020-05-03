<?php
namespace app\commands;

use Kore\Command;

class sample extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function exec()
    {
        printf($this->getArg(0) . "\n");
        printf($this->getOpt('test') . "\n");
        sleep(5);
    }
}