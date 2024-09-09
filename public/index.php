<?php
require '../vendor/autoload.php';

use App\Controllers\MainController;

// Instanciar el controlador
$controller = new MainController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos del formulario
    $bmi = $controller->handleForm($_POST);
    echo "Tu IMC es: " . $bmi;
} else {
    // Mostrar el formulario
    require '../src/Views/form.php';
}
