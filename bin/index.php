<?php
require_once(__DIR__.'/../app/config/bootstrap.php');

$app = new Kore\Application();
$app->runCmd($argv);