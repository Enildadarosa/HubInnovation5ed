<?php

include __DIR__ . '/vendor/autoload.php';

use App\Entity\Palestra;

$new_obj = new Palestra();
$palestras = $new_obj->filtrar();

$enviaJS = json_encode($palestras);
echo $enviaJS;