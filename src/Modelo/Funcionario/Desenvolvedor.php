<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;

class Desenvolvedor extends Funcionario
{

    public function promocao()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}
