
<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="reken.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" /> 
</head>
<body>
  <form method="POST">
    <label for="input">input:</label>
    
    <br>
    <input  name="input" id="inputbox"  type="text" >
    <br>
    <label for="">afrond preciesie op decimalen:</label>
    <br>
    <input  name="inputaf" id="inputafrond"  type="text" >
    <br>
    <br>
    <label for="antwoord">antwoord:</label>
    <br>
     <input readonly type="text" id="outputbox" value="<?php include "function.php"; if(isset($_POST["bereken"])) {formOutput();} echo $phpres;?>">
    
   <br>

    
    <br>
    <button type="button" value="1" class="num1">1</button >
    
    <button type="button" value="2" class="num1">2</button >
    <button type="button" value="3" class="num1">3</button >
    <button type="button" value="+" class="op" name="plus" class="plus">+</button >
    <br>
    <button type="button" value="4" class="num1">4</button >
    <button type="button" value="5" class="num1">5</button >
    <button type="button" value="6" class="num1">6</button >
    <button type="button" value="-" class="op" name="min" class="min">-</button >
    <br>
    <button type="button" value="7" class="num1">7</button >
    <button type="button" value="8" class="num1">8</button>
    <button type="button" value="9" class="num1">9</button >
    <button type="button" value="*" class="op" name="keer" class="keer">*</button >
    
    <br>
    <button type="button" value="." class="op" name="keer" class="punt">.</button >
    
  
    
    
    <button type="button" value="/" class="op" name="delen" class="delen">/</button>
    <button type="button" value="" class="op" name="delen" class="delen"></button>
    
    <button type="button" value="^" class="op" name="macht" class="macht">^</button >
    
    <button type="button" value="%" class="op" name="modulo" class="modulo">%</button >
    <br>
    <button type="button" name="afronden" id="afronden" class="afronden">afronden</button>
    
    <button   name="bereken" class="bereken">bereken</button>
   
  </form>


  <?php

rekendata();




?>
<script src="reken.js"></script>
</body>

</html>



