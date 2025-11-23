<?php 
include_once 'AA2/includes/header.php';
?>

<main>
        <div class="box-main">
            <section class="section-info">

            <div class="custom-box">
                <h2>Lista de serviços cadastrados</h2>

<?php
$arquivo = "servicos.dat";

if (file_exists($arquivo)) {
    $dados = file($arquivo, FILE_IGNORE_NEW_LINES);

    if (count($dados) > 0) {
        echo "<table border='1' cellpadding='8'>";
        echo "<tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Tecnologia</th>
                <th>Valor (R$)</th>
                <th>Ações</th>
              </tr>";

        foreach ($dados as $index => $linha) {
            list($nome, $descricao, $tecnologia, $valor) = explode("|", $linha);

            echo "<tr>
                    <td>$nome</td>
                    <td>$descricao</td>
                    <td>$tecnologia</td>
                    <td>$valor</td>
                    <td>
                        <a href='editar.php?id=$index'>Editar</a> | 
                        <a href='excluir.php?id=$index' onclick=\"return confirm('Tem certeza que deseja excluir?');\">
                            Excluir
                        </a>
                    </td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nenhum serviço cadastrado ainda.</p>";
    }
} else {
    echo "<p>A lista de serviços está vazia.</p>";
}
?>

            </div>

            <div class="custom-box">
                <div class="box-form">
                    <h2>Cadastrar novo serviço</h2>
                    <form method="POST" action="salvar.php">
                        <label>Nome do serviço:</label><br>
                        <input type="text" name="nome" required><br><br>
                        <label>Descrição:</label><br>
                        <textarea name="descricao" required></textarea><br><br>
                        <label>Tecnologia usada:</label><br>
                        <input type="text" name="tecnologia" required><br><br>
                        <label>Valor estimado:</label><br>
                        <input type="number" name="valor" step="0.01" required><br><br>
                        <button type="submit">Salvar</button>
                    </form>
                </div>   
            </div>
        </section>
    </div>
</main>

<?php
include_once 'AA2/includes/footer.php';
?>
