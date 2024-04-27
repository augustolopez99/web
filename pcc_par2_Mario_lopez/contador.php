<h2>Resultado del conteo de palabras y caracteres</h2>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $texto = $_POST["texto"]; // Obtener el texto ingresado por el usuario

    // Función conteo palabras
    function contarPalabras($texto) {
        return str_word_count($texto);
    }

    // Función conteo caracteres
    function contarCaracteres($texto) {
        return strlen($texto);
    }

    // Contar palabras y caracteres del texto ingresado
    $cantidad_palabras = contarPalabras($texto);
    $cantidad_caracteres = contarCaracteres($texto);

    echo "<p>La cantidad de palabras en el texto es: $cantidad_palabras</p>";
    echo "<p>La cantidad de caracteres en el texto es: $cantidad_caracteres</p>";
}

?>
