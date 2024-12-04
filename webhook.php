<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents("php://input");
    echo "¡Hola Mundo desde Webhook! Datos recibidos: " . $input;
} else {
    echo "Esperando eventos...";
}
?>
