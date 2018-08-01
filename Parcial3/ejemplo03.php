<?php
 define("RUTA","/parcial3");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Ejemplo 03 </title>
</head>

<body>
    <?php
        $valor = 5;
        echo "El valor es: ".$valor."\n<br>";
        echo "El valor es: $valor\n"; // ojo: comillas dobles
        
        echo RUTA;
    
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
    ?>
</body>
</html>
