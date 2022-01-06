<?php

use Data\Application;

require_once "data/Application.php";

$app = new Application("Belajar OOP PHP", '1.0.1');
var_dump($app->getInfoApp());