
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.num1, .op').forEach(button => {
      button.addEventListener('click', () => {
          document.getElementById('inputbox').value += button.value;
      });
  });

  


});

document.querySelector('.afronden').addEventListener('click', () => {
   var inputafrond = document.getElementById('inputafrond'); 
   var outputbox = document.getElementById('outputbox');

   

    if(inputafrond.value === "0"  ){
    outputbox.value = Math.round(eval(outputbox.value));
  }
  else if(inputafrond.value === "1"){
     let curval = parseFloat(outputbox.value);
     outputbox.value = Math.round(curval * 10) / 10;

  }
  else if(inputafrond.value === "2"){
    let curval = parseFloat(outputbox.value);
    outputbox.value = Math.round(curval * 100) / 100;

 }
});


