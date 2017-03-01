<?php
use Cart\App;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();
require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();

$app = new App;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => getenv('DB_NAME'),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

require __DIR__ . '/../app/routes.php';