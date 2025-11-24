const btnMenu = document.querySelector('.btn-custom');
const menu = document.querySelector(".vertical-menu");
const btnMenuClose = document.querySelector(".vertical-menu .btn-custom");
const body = document.body;

btnMenu.addEventListener('click', function() {

    menu.classList.add('menu-active');
    body.classList.add('no-scroll');
});

btnMenuClose.addEventListener('click', function() {
    menu.classList.remove('menu-active');
    body.classList.remove('no-scroll');
});

document.querySelector(".custom-form").addEventListener("submit", function(e) {
    let nome = document.querySelector("input[name='nome']").value.trim();
    let descricao = document.querySelector("textarea[name='descricao']").value.trim();
    let tecnologia = document.querySelector("input[name='tecnologia']").value.trim();
    let valor = document.querySelector("input[name='valor']").value.trim();

    if (nome.length < 3) {
        alert("O nome do serviço deve ter pelo menos 3 caracteres.");
        e.preventDefault();
        return;
    }

    if (descricao.length < 10) {
        alert("A descrição deve ter pelo menos 10 caracteres.");
        e.preventDefault();
        return;
    }

    if (tecnologia.length < 3) {
        alert("A tecnologia usada deve ter pelo menos 3 caracteres.");
        e.preventDefault();
        return;
    }

    if (valor === "" || isNaN(valor) || Number(valor) <= 0) {
        alert("Informe um valor válido e maior que zero.");
        e.preventDefault();
        return;
    }
});

document.querySelector(".custom-form").addEventListener("submit", function(e) {
    const nome = document.getElementById("nome");
    const email = document.getElementById("email");
    const mensagem = document.getElementById("mensagem");

    if (nome.value.trim().length < 3) {
        alert("O nome deve ter pelo menos 3 caracteres.");
        nome.focus();
        e.preventDefault();
        return;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value.trim())) {
        alert("Por favor, insira um e-mail válido.");
        email.focus();
        e.preventDefault();
        return;
    }


    if (mensagem.value.trim().length < 5) {
        alert("A mensagem deve ter pelo menos 5 caracteres.");
        mensagem.focus();
        e.preventDefault();
        return;
    }

    alert("Formulário enviado com sucesso!");
});

