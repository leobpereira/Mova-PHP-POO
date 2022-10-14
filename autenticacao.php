<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor1 = new Gerente('Leonildo', new Cpf('027.895.836-25'), 7100.0);

$autenticador->tentarLogin($diretor1, '4321');