<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocales (LAH)</title>
</head>
<body>
<?php
  $letras = $_POST['letra'];
  if($letras == 'a' || $letras == 'e' || $letras == 'i' || $letras == 'o' || $letras == 'u'){
     echo "La letra que digitaste es: ".$letras." es una vocal";
  }
 else{
    echo "La letra que digitaste es: ".$letras." es una consonante";
 }
?>
</body>
</html>