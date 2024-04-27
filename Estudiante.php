<?php
// Incluir la clase Padre
require_once 'Padre.php';

// Definición de la clase Hija
class Estudiante extends Padre {
    // Atributos adicionales
    private $curso;
    
    // Constructor
    public function __construct($nombre, $edad, $email, $curso) {
        parent::__construct($nombre, $edad, $email);
        $this->curso = $curso;
    }
    
    // Método propio
    public function realizarAccion() {
        echo "El estudiante está inscrito en el curso de " . $this->curso . ".";
    }
}
?>