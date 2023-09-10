document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email');
    const form = document.querySelector('form');
  
    form.addEventListener('submit', function(event) {
      const emailValue = emailInput.value;
  
      if (!emailValue.includes('@')) {
        event.preventDefault(); // Prevent form submission
        alert('Por favor, insira um e-mail válido');
      }
    });
  });
  
  document.addEventListener("DOMContentLoaded", function() {
    const passwordInput = document.querySelector("input[type='password']");
    const form = document.querySelector("form");
  
    form.addEventListener("submit", function(event) {
      const passwordValue = passwordInput.value;
  
      if (passwordValue.length !== 6) {
        alert("A senha precisa conter no mínimo 6 caracteres.");
        event.preventDefault();
      }
  
      if (passwordValue === "123456") {
        alert("Isso não é senha");
        event.preventDefault();
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const clienteOption = document.getElementById('clienteOption');
    const colaboradorOption = document.getElementById('colaboradorOption');
  
    form.addEventListener('submit', function(event) {
      if (!clienteOption.checked && !colaboradorOption.checked) {
        event.preventDefault();
        alert('Por favor, selecione uma opção entre Cliente e Colaborador.');
      }
    });
  });
  