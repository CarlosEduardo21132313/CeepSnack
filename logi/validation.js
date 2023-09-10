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
  