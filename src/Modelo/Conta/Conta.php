<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $qtdContas = 0;
    // Static representa um atributo geral da própria classe e não de cada instancia

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$qtdContas++; // Self representa o nome da própria classe
    }

    public function __destruct()
    {
        self::$qtdContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getCpf()
    {
        return $this->titular->getCpf();
    }

    public function getNome(): string
    {
        return $this->titular->getNome();
    }

    public static function getQtdContas(): int
    {
        return self::$qtdContas;
    }

    // Classe que será sobreescrita em outras classes
    abstract protected function percentualTarifa(): float;
}
