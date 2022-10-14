<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf); //Chama o construtor da classe pai
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        } else {
            $this->salario += $valorAumento;
        }
    }

    public function getSalario()
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;

}