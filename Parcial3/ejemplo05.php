<?php

function incremento(){
    $x=3;
    return $x++;
}

echo incremento()."<br>";

$x=3;

function suma($valor){
    return $valor+1;
}

echo suma($x)."<br>";

function saludo($titulo="Sr.",$nombre="Desconocido"){
    return "Hola ".$titulo." ".$nombre;
}

echo saludo()."<br>";
echo saludo('Prof.')."<br>";
echo saludo('',"Enrique")."<br>";


?>