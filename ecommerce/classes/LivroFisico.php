<?php

class LivroFisico extends Produto
{
    private $quantidadedePaginas;

    public function __construct(float $xPreco, string $xNome, string $xDescricao, int $xQuantidadedePaginas)
    {
        parent::__construct($xPreco,  $xNome, $xDescricao);
        $this->quantidadedePaginas = $xQuantidadedePaginas;
    }
}