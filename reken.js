document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.num1, .op').forEach(button => {
      button.addEventListener('click', () => {
          document.getElementById('inputbox').value += button.value;
      });
  });

  document.querySelector('.afronden').addEventListener('click', () => {
    inputbox.value = Math.round(eval(inputbox.value));
});
})