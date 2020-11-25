<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        ?>
       <?php
        require_once 'controlador/controlador.php';
        require_once 'modelo/gestorcita.php';
        require_once 'modelo/cita.php';
        require_once 'modelo/paciente.php';
        require_once 'modelo/conexion.php';
        $controlador    = new Controlador();
        
        if( isset($_GET["accion"])){
            if($_GET["accion"] == "asignar"){
                $controlador->verPagina('vista/html/asignar.php');
            }elseif($_GET["accion"] == "guardarCita"){
                $controlador->agregarCita($_POST["asignarDocumento"],
                        $_POST["medico"],
                        $_POST["fecha"],
                        $_POST["hora"],
                        $_POST["consultorio"]);
                echo "Mensaje de prueba";
            } 
            if($_GET["accion"] == "consultar"){
                $controlador->verPagina('vista/html/consultar.php');
            }
            if($_GET["accion"] == "cancelar"){
                $controlador->verPagina('vista/html/cancelar.php');
            }
         
        }   else {
                $controlador->verPagina('vista/html/inicio.php');
                }
       ?>
    </body>
</html>
