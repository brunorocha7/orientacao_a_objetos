<?php

class contaBancaria
{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;


    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {          
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }
        public function obterSaldo()
    {
        return 'Seu saldo atual é de R$ ' . $this->saldo. '<br>';
    }
        public function depositar($valor)
    {
        $this->saldo += $valor;
        echo 'Deposito de R$ ' . $valor . ' realizado!<br>';
    }
    public function sacar($valor)
    {
        $this->saldo -= $valor;
        echo 'Saque de R$ ' . $valor . ' realizado!<br>';
    }
}

$conta = new contaBancaria('Banco Nubank', 'Bruno Rocha', '1234', '1234567', 100);
    
echo $conta->obterSaldo();
    
$conta->depositar(400.00);

echo $conta->obterSaldo();

$conta->sacar(300.00);

echo $conta->obterSaldo();

