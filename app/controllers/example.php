<?php

namespace app\controllers;

use Kore\Controller;

class example extends Controller
{
    /**
     * {@inheritdoc}
     */
    protected function action()
    {
        $this->respondView('example');
    }
}