<?php

echo "<pre>"; print_r($_POST); echo "</pre>";

include __DIR__.'/vendor/autoload.php';
//importar class do banco de dados
use App\DB\Database;

$test = new Database;