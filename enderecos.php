<?php

use Alura\Banco\Modelo;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Guaxupé', 'Vila Conceição', 'Major Joaquim Pedro', '740');

echo $endereco1->cidade;