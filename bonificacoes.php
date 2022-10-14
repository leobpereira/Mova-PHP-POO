<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorBonificacao;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

$funcionario1 = new Desenvolvedor(
    'Leo Pereira',
    new CPF('123.456.789-10'),
    550
);

$funcionario1->promocao();

$funcionario2 = new Gerente(
    'Maria',
    new CPF('987.654.321-10'),
    3000.0
);

$diretor1 = new Diretor(
    'Lana Paula',
    new CPF('123.444.555-79'),
    5000.0
);

$editor1 = new EditorVideo(
    'Lucas',
    new CPF('124.357.689-10'),
    1500.0
);

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacao($funcionario1);
$controlador->adicionaBonificacao($funcionario2);
$controlador->adicionaBonificacao($diretor1);
$controlador->adicionaBonificacao($editor1);


echo $controlador->retornaTotal();