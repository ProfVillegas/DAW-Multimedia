<?php

include_once('libro.php');
$data=Libro::buscarPorId($_GET['isbn']);
print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Formulario </title>
    

    <link rel="stylesheet" href="recursos/css/bootstrap.min.css" />
    <link rel="stylesheet" href="recursos/css/style.css" media="screen" />
  
</head>
    <body>
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-2 collapse d-md-flex bg-light pt-2 h-100" id="sidebar">
                    <ul class="nav flex-column flex-nowrap">
                       <li class="nav-item"><a class="nav-link" href="#">menu 1</a></li>
                       <li class="nav-item">
                           <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Menu 2</a>
                           <div id="submenu1" class="collapse" aria-expanded="false">
                                <ul class="flex-column pl-2 nav">
                                    <li class="nav-item"><a class="nav-link" href="#">
                                        submenu 2.1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">
                                        submenu 2.2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">
                                        submenu 2.3</a></li>
                               </ul>
                           </div>
                        </li>
                       <li class="nav-item"><a class="nav-link" href="#">menu3</a></li>
                    </ul>
                </div>
                <div class="col pt-2">
                    <h2>Registros</h2>
                    <?php
                    include_once('form.php');
                    ?>
                </div>
            </div>
        </div>
    <!--Librerias Bootstrap4-->
    <script src="recursos/js/jquery-3.3.1.min.js"></script>
    <script src="recursos/js/popper.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>    
    </body>  
</html>






