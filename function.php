
<?php
// auteur: dorian
// functie: algemene functies tbv hergebruik

include_once "config.php";




 function connectDatab(){
    $servername = SERVERNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $dbname = DATABASE;
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //echo "Connected successfully";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

 }


 


 

 function formOutput(){
   if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input = $_POST["input"];

    if (strpos($input, '+') !== false) {
      $operator = '+';
  } elseif (strpos($input, '-') !== false) {
      $operator = '-';
  } elseif(strpos($input, '*') !== false) {
    $operator = '*';
  }  elseif(strpos($input, '/') !== false) {
    $operator = '/';
  }   elseif(strpos($input, '√') !== false) {
    $operator = '√';
  }
   elseif(strpos($input, '^') !== false) {
  $operator = '^';}
  elseif(strpos($input, '%') !== false) {
    $operator = '%';
  } 

 else{
  echo "vul iets in";
}

  


  if ($operator === '√') {
    $value = trim(str_replace('√', '', $input));
    $value = intval($value);
    if ($value < 0) {
        $result = "Error: wortel van negatief nummer";
    } else {
        $result = sqrt($value);
        return $result;
    }
         
 }
  else {

    $values = explode($operator , $input);

    $values = array_map('trim', $values);
    $values = array_filter($values, function($values)
    {
      return !empty($values);

    });
        $values = array_map('intval', $values);
        
    switch($operator) {
      case '+': 
                $result = array_sum($values);
      break;
      
      case '-': 
                $result  = $values[0];
                for ($i = 1; $i < count($values); $i++) {
                  $result -= $values[$i];
                  
                };  
      break;

      case '*':
                $result = array_product($values);
      break;

      case '/': 
                $result  = $values[0];
                for ($i = 1; $i < count($values); $i++) {
                $result /= $values[$i]; }
      break;

      case '%': 
        $result  = $values[0];
                for ($i = 1; $i < count($values); $i++) {
                $result %= $values[$i]; }
      break;

      

    
      default:
              $result = "vul geldige tekens in";
      break;
      
 };
   

}

if (count($values) < 2 ) {
  echo "Error: ongeldige berekening";
  return;
}




$conn = connectDatab();

$stmt = $conn->prepare("INSERT INTO geschiedenis(berekening, uitkomst) VALUES(:berekening, :uitkomst)");

        $stmt->bindParam(':berekening', $input);
        $stmt->bindParam(':uitkomst', $result);


try {
  $stmt->execute();
  $result = eval("return $input;");
  return  $result;
  
} catch (ParseError $e) {
  echo "Error: Invalid expression";
}

  };

  

  
}

$phpres = formOutput();

function getData($table){
  // Connect database
  $conn = connectDatab();

  // Select data uit de opgegeven table methode query
  // query: is een prepare en execute in 1 zonder placeholders
  // $result = $conn->query("SELECT * FROM $table")->fetchAll();

  // Select data uit de opgegeven table methode prepare
  $sql = "SELECT * FROM $table";
  $query = $conn->prepare($sql);
  $query->execute();
  $result = $query->fetchAll();

  return $result;
}

 function rekendata() {
  
  $result = getData(CRUD_TABLE);

  addtable($result);

}

function addtable($result){
  $headers = array_keys($result[0]);
$table = "<table style='border-collapse: collapse; border: 1px solid black;'>";
$table .= "<tr>";
foreach($headers as $header){
    $table .= "<th style='border: 1px solid black;'>" . $header . "</th>";   
}
$table .= "</tr>";

// Print each row of the table
foreach ($result as $row) {
    $table .= "<tr>";
    // Print each column
    foreach ($row as $cell) {
        $table .= "<td style='border: 1px solid black;'>" . $cell . "</td>";
    }
    $table .= "</tr>";
}
$table .= "</table>";

echo $table;
}