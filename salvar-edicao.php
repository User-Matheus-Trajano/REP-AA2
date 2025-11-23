<?php
$arquivo = "servicos.dat";

// Recebe os dados
$id = intval($_POST['id']);
$nome = trim($_POST['nome']);
$descricao = trim($_POST['descricao']);
$tecnologia = trim($_POST['tecnologia']);
$valor = trim($_POST['valor']);

// Carrega o arquivo
$dados = file($arquivo, FILE_IGNORE_NEW_LINES);

// Monta a nova linha
$novaLinha = $nome . "|" . $descricao . "|" . $tecnologia . "|" . $valor;

// Substitui a linha antiga pela nova
$dados[$id] = $novaLinha;

// Salva novamente o arquivo
file_put_contents($arquivo, implode(PHP_EOL, $dados) . PHP_EOL);

// Redireciona de volta
header("Location: servicos.php");
exit;
