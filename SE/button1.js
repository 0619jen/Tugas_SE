document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.item');
    
    buttons.forEach(function(button) {
      button.addEventListener('click', function() {
        if (button.classList.contains('booked')) {
          alert('Tempat booking sudah diambil.');
        } else {
          button.classList.add('booked');
          button.innerHTML = 'Booked';
        }
      });
    });
  });