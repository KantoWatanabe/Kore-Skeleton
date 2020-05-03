<?php
namespace app\controllers;

use Kore\Controller;

class sample extends Controller
{
    /**
     * {@inheritdoc}
     */
    protected function action()
    {
        $this->respondView('sample');
    }
}