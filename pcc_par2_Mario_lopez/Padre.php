<?php
// Definición de la clase Padre
class Padre {
    // Atributos
    protected $nombre;
    protected $edad;
    protected $email;
    
    // Constructor
    public function __construct($nombre, $edad, $email) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }
    
    // Método para mostrar los atributos y su contenido
    public function mostrarAtributos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
?>
