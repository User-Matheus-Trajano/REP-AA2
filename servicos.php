<?php 
include_once 'AA2/includes/header.php';
?>

<main>
        <div class="box-main">
            <section class="box-section-servico">

            <div class="box-tabela">
                <h2>Lista de serviços cadastrados</h2>

<?php
$arquivo = "servicos.dat";

if (file_exists($arquivo)) {
    $dados = file($arquivo, FILE_IGNORE_NEW_LINES);

    if (count($dados) > 0) {
        echo "<table class='tabela-servicos'>";
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
                    <td class='acoes'>
                        <a href='editar.php?id=$index'>Editar</a>
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

            <div class="box-cad-form">
                <div class="box-form-servico">
                    <h2>Cadastrar novo serviço</h2>
                    <form method="POST" action="salvar.php" class="custom-form">
                        <label>Nome do serviço:</label>
                        <input type="text" name="nome" required>
                        <label>Descrição:</label>
                        <textarea name="descricao" required></textarea>
                        <label>Tecnologia usada:</label>
                        <input type="text" name="tecnologia" required>
                        <label>Valor estimado:</label>
                        <input type="number" name="valor" step="0.01" required>
                        <div class="custom-btn">
                            <input type="submit" value="Cadastrar">
                        </div>
                    </form>
                </div>   
            </div>
        </section>
    </div>
</main>

<?php
include_once 'AA2/includes/footer.php';
?>
