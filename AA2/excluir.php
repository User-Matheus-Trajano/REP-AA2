<?php
$arquivo = "servicos.dat";

// Verifica se o ID foi enviado
if (!isset($_GET['id'])) {
    die("ID inválido!");
}

$id = intval($_GET['id']); // índice da linha a ser removida

if (file_exists($arquivo)) {
    $dados = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Remove a linha especificada
    if (isset($dados[$id])) {
        unset($dados[$id]);
    }

    // Reindexa os índices (evita buracos)
    $dados = array_values($dados);

    // Regrava o arquivo sem adicionar linha vazia extra
    file_put_contents($arquivo, implode(PHP_EOL, $dados));
}

header("Location: servicos.php");
exit;
