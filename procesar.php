<?php
// Incluir la clase Estudiante
require_once 'Estudiante.php';

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$curso = $_POST['curso'];

// Crear instancia de la clase hija Estudiante
$estudiante = new Estudiante($nombre, $edad, $email, $curso);

// Mostrar valores almacenados en atributos
echo "<h2>Valores Almacenados en Atributos:</h2>";
$estudiante->mostrarAtributos();
echo "<br>";

// Usar el método propio de la clase hija para realizar una acción
echo "<h2>Acción Realizada:</h2>";
$estudiante->realizarAccion();
?>
