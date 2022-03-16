<?php 

require_once 'data/Application.php';

// gunakan keyword use untuk menggunakan namespace
use Data\Application;

class MiniApp extends Application
{

}

$app = new MiniApp("Belajar OOP PHP", '1.2.0', 'Linux');
var_dump($app->getInfoApp());