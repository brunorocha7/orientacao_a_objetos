<?php

class vendaTotal
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {          
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }
    
    public function obterValor()
    {
        return 'Seu saldo atual é de R$ ' . $this->valorTotal . "<br>";
    }
}

$venda = new vendaTotal ('04/04/2021', 'Galaxy M31', '2', 4000.00);

echo $venda->obterValor();