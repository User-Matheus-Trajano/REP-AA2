<?php
$arquivo = "servicos.dat";

if (!isset($_GET['id'])) {
    die("ID inválido!");
}

$id = intval($_GET['id']);

if (!file_exists($arquivo)) {
    die("Arquivo não encontrado!");
}

$dados = file($arquivo, FILE_IGNORE_NEW_LINES);

if (!isset($dados[$id])) {
    die("Serviço não encontrado!");
}

list($nome, $descricao, $tecnologia, $valor) = explode("|", $dados[$id]);
?>

<?php include_once 'includes/header.php'; ?>

<main>
    <div class="box-main">
        <section class="section-info">

            <div class="custom-box">
                <h2>Editar serviço</h2>

                <form method="POST" action="salvar-edicao.php">
                    <input type="hidden" name="id" value="<?= $id ?>">

                    <label>Nome do serviço:</label><br>
                    <input type="text" name="nome" value="<?= htmlspecialchars($nome) ?>" required><br><br>

                    <label>Descrição:</label><br>
                    <textarea name="descricao" required><?= htmlspecialchars($descricao) ?></textarea><br><br>

                    <label>Tecnologia usada:</label><br>
                    <input type="text" name="tecnologia" value="<?= htmlspecialchars($tecnologia) ?>" required><br><br>

                    <label>Valor estimado:</label><br>
                    <input type="number" step="0.01" name="valor" value="<?= htmlspecialchars($valor) ?>" required><br><br>

                    <button type="submit">Salvar Alterações</button>
                </form>
            </div>

        </section>
    </div>
</main>

<?php include_once 'AA2/includes/footer.php'; ?>
