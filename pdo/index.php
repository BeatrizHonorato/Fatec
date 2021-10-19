<?php
require_once 'vendor/autoload.php';

//quando for para fazer o update tirar os codigos abaixo do comentarios

$produto = new \App\Model\Produto();
//fazer update no codigo
$produto->setId(2);
$produto->setNome('Cadeira');
$produto->setDescricao('Gamer');

$produtoDao = new \App\Model\ProdutoDao();
//fazer update no codigo
$produtoDao->update($produto);
//deletar produto
//$produtoDao->delete(2);
$produtoDao->read();

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;