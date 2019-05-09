<?php

class Cadeira
{
    // propriedade
    private $cor; 
    private $estofado;
    private $fixaOuNao;

    public function __construct($xCor, $xEstofado, $fixaOuNao)
    {
        $this->cor = $xCor;
        $this->estofado = $xEstofado;
    }
//método
    public function sentar()
    {
        echo 'sentar...';
    }
}

