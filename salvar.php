<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $tecnologia = $_POST["tecnologia"];
    $valor = $_POST["valor"];

    // formata a linha a ser salva
    $linha = "$nome|$descricao|$tecnologia|$valor\n";

    // salva no arquivo .dat
    file_put_contents("servicos.dat", $linha, FILE_APPEND);

    // redireciona de volta
    header("Location: servicos.php");
    exit;
} else {
    echo "Acesso inválido.";
}
