   <?php
$counterFile = "contador.txt";

// Verifica si el archivo de contador existe
if (file_exists($counterFile)) {
    // Lee el valor actual del contador
    $count = file_get_contents($counterFile);

    // Incrementa el contador
    $count++;

    // Escribe el nuevo valor en el archivo
    file_put_contents($counterFile, $count);

    // Devuelve el valor del contador
    echo $count;
} else {
    // Si el archivo no existe, crea uno y establece el contador en 1
    file_put_contents($counterFile, 1);

    // Devuelve 1 como el valor inicial del contador
    echo "113";
}
?>