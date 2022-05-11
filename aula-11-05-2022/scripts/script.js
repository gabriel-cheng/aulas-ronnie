const campoSenha = document.querySelector('input[name="senha1"]');
const confirmarSenha = document.querySelector('input[name="senha2"]');
const botao = document.querySelector('input[name="btn-salvar"]');
const erro = document.querySelector('.mens-erro');

campoSenha.addEventListener('input', function() {
    verificarCampos();
});

confirmarSenha.addEventListener('input', function() {
    verificarCampos( );
});

const verificarCampos = function() {
    if(campoSenha.value == confirmarSenha.value && campoSenha.value.length >= 2) {
        botao.disabled = false; // Desabilita o botão de salvar os dados
        erro.style.display = 'none'; // Esconde a mensagem
        erro.style.color = 'green'; // Coloca a cor da mensagem em verde
    }
    else {
        botao.disabled = true; // Habilita o botão
        erro.style.display = 'block'; // Mostra a mensagem
        erro.style.color = 'red'; // Coloca a cor em vermelho
    }    
}