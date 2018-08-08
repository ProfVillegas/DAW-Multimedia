<pre>
<?php

include_once("libro.php");
$libro= new Libro("El Libro de C","Santos Pool", "AA1/2018/CA");
var_dump($libro);

//echo $libro->nombre;

echo $libro->getNombre();

$data=Libro::ListarTodos();

print_r($data);

$data=Libro::buscarPorId("A1");

echo $data->getNombre();
print_r($data);
?>
</pre>
