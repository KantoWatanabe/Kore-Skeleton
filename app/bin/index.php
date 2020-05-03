<?php
require_once(__DIR__.'/../config/bootstrap.php');

$app = new Kore\Application();
$app->runCmd($argv);