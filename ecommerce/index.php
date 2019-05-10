<?php
include 'classes/Produto.php';
include 'classes/Ebook.php';
include 'classes/LivroFisico.php';

$ebook = new Ebook(10.90, 'PHP OO', 'Livro muito bom', 'http://xxx');
$livroFisico = new LivroFisico(12.90, 'PHP OO', 'Livro muito bom', 300);

echo "<pre>";
var_dump($ebook);
var_dump($livroFisico);