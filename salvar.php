<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $tecnologia = $_POST["tecnologia"];
    $valor = $_POST["valor"];

    $linha = "$nome|$descricao|$tecnologia|$valor\n";

    file_put_contents("servicos.dat", $linha, FILE_APPEND);

    header("Location: servicos.php");
    exit;
} else {
    echo "Acesso inválido.";
}
