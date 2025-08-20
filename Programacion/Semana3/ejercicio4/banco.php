<?php

class cuentaBancaria {

    private $titular;
    private $saldo;
    private $tipoCuenta;


    public function __construct(string $titular, float $saldo, string $tipoCuenta) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;
    }

    public function depositar(float $monto): float {
        $this->saldo += $monto;
        return $this->saldo;
    }

    public function retirar(float $monto): float {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
        }
        return $this->saldo;
    }

    public function getSaldo() : float {
        return $this->saldo;
    }

}