<?php
$arquivo = "servicos.dat";


if (!isset($_GET['id'])) {
    die("ID inválido!");
}

$id = intval($_GET['id']);

if (file_exists($arquivo)) {
    $dados = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (isset($dados[$id])) {
        unset($dados[$id]);
    }

    $dados = array_values($dados);

    file_put_contents($arquivo, implode(PHP_EOL, $dados));
}

header("Location: servicos.php");
exit;
