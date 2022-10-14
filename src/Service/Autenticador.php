<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentarLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha)) {
            echo "Usuário logado no sistema";
        } else {
            echo "Ops. Senha incorreta!";
        }
    }
}