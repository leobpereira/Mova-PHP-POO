<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco("Guaxupé", "Vila Conceição", "Major Joaquim Pedro", "740");

$lucas = new Titular(new Cpf('123.456.789-10'), 'Lucas Pereira', $endereco);
$conta1 = new Conta($lucas);
$conta1->deposita(500);
$conta1->saca(300);

echo "Conta Lucas" . PHP_EOL;
echo $conta1->getNome() . PHP_EOL;
echo $conta1->getCpf() . PHP_EOL;
echo $conta1->getSaldo() . PHP_EOL;

$maria = new Titular(new Cpf('698.549.548-10'), 'Maria', $endereco);
$conta2 = new Conta($maria);
var_dump($conta2);

echo "Conta Maria" . PHP_EOL;
echo $conta2->getNome() . PHP_EOL;
echo $conta2->getCpf() . PHP_EOL;
echo $conta2->getSaldo() . PHP_EOL;

$outroEndereco = new Endereco('Cidade', 'Bairro', 'Rua', '0');
$outra = new Titular(new Cpf('123.488.777-11'), '111.111.111-11', $outroEndereco);
unset($outra);
echo "Contas existentes: " . Conta::getQtdContas();


