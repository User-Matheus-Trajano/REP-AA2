<?php
$arquivo = "servicos.dat";

$id = intval($_POST['id']);
$nome = trim($_POST['nome']);
$descricao = trim($_POST['descricao']);
$tecnologia = trim($_POST['tecnologia']);
$valor = trim($_POST['valor']);

$dados = file($arquivo, FILE_IGNORE_NEW_LINES);

$novaLinha = $nome . "|" . $descricao . "|" . $tecnologia . "|" . $valor;

$dados[$id] = $novaLinha;

file_put_contents($arquivo, implode(PHP_EOL, $dados) . PHP_EOL);

header("Location: servicos.php");
exit;
