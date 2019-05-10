<?php

class Produto
{
    private $preco;
    private $nome;
    private $descricao;

    public function __construct(float $xPreco, string $xNome, string $xDescricao)
    {
        $this->preco = $xPreco;
        $this->preco = $xNome;
        $this->preco = $xDescricao;
    }
}