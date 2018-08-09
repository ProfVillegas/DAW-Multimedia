<pre>
<?php

include_once("libro.php");
$libro= new Libro("El libro de los colores","Victoria Martinez", "AA2/2018/DD");

$libro->guardar();

var_dump($libro);

//echo $libro->nombre;

echo $libro->getNombre();

$data=Libro::ListarTodos();

print_r($data);

echo "Eliminar registro AA2/2018/DD";

echo Libro::eliminar("AA2/2018/DD");


$data=Libro::ListarTodos();

print_r($data);

$data=Libro::buscarPorId("A1");

echo $data->getNombre();
print_r($data);
?>
</pre>
