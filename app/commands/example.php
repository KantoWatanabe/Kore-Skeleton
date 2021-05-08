<?php

namespace app\commands;

use Kore\Command;

class example extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function exec()
    {
        echo 'hello kore.';
    }
}