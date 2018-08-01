<?php
$n1=20;
$n2=16;

if($n1>$n2){
    echo $n1." es mayor<br>";
} else {    
    echo $n2." es mayor<br>";
}

if($n1<$n2){
    echo $n2." es mayor<br>";
} else {    
    echo $n1." es mayor<br>";
}

if($n1>=$n2){
    echo $n1." es mayor o igual<br>";
}

if($n1<=$n2){
    echo $n2." es menor o igual<br>";
}

if($n1!=$n2){
    echo $n2." son diferentes<br>";
}

for($x=0;$x<10;$x++){
    echo $x."<br>";
}

$n1=5;
switch($n1){
    case 1:{
        echo "caso uno";        
        break;
    }
    case 2:{        
        echo "caso dos";
        break;
    }
    case 3:{        
        echo "caso tres";
        break;
    }
    default:{
            echo "Predeterminado";
        }
}

$arreglo = array(1,2,3,4);

echo $arreglo[3]."<br>";

echo "<ul>";
//Solo obtiene el valor del arreglo 
foreach($arreglo as $r){
    echo "<li>".$r."</li>";
}

echo "</ul>";

echo "<ul id='lista2'>";
//Solo obtiene el index y el valor 
foreach($arreglo as $index=>$valor){
    echo "<li>ar[$index]".$valor."</li>";
}

echo "</ul>";

$arreglo=array("nombre"=>"Juan","Apellido"=>"Lopez","Edad"=>21);
echo "<ul id='lista3'>";
//Solo obtiene el valor del arreglo 
foreach($arreglo as $index=>$valor){
    echo "<li>ar[$index]".$valor."</li>";
}

echo "</ul>";



?>
