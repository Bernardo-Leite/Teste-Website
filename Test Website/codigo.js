// Exemplo: Mensagem de boas-vindas ao carregar a página
window.onload = () => {
  alert("Bem-vindo ao nosso site!");
};

// Exemplo: Interação simples com os botões
const button = document.querySelector('.btn');
if (button) {
  button.addEventListener('click', () => {
    alert('Você clicou no botão!');
  });
}