<?php 
include_once 'AA2/includes/header.php';
?>
<!-- Validação com JS -->
<main>
    <div class="box-main">
        <section class="custom-contato ">
            
            <div class="box-contato">
                <form action="#" method="POST" class="custom-form">
                    <h2 class="custom-h2">Formulário de Contato</h2>
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" required>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" required>
                    <label for="mensagem">Mensagem:</label>
                    <input type="text" id="mensagem" required>
                    <div class="custom-btn">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            
            <a href="https://github.com/User-Matheus-Trajano/REP-AA2" class="link-com-icone">
            <img src="AA2/assets/Imgs/github.png" alt="Icone">Repositório do Site</a>
            </div>
        </section>
    </div>
</main>

<?php 
include_once 'AA2/includes/footer.php';
?>