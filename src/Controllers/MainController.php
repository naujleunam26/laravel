<?php
namespace App\Controllers;

use App\Models\Calculator;
use PHPMailer\PHPMailer\PHPMailer;

class MainController
{
    public function __construct()
    {
        // Constructor
    }

    public function handleForm($data)
    {
        $calculator = new Calculator();

        // Calcular el IMC a partir de los datos ingresados
        $bmi = $calculator->calculateBMI($data['weight'], $data['height']);
        
        // Enviar correo usando PHPMailer (simplificado para principiantes)
        $this->sendEmail("Tu IMC es: $bmi");

        return $bmi;
    }

    private function sendEmail($message)
    {
        $mail = new PHPMailer();
        $mail->setFrom('from@example.com', 'Tu App');
        $mail->addAddress('to@example.com');
        $mail->Subject = 'Resultado del IMC';
        $mail->Body = $message;

        if (!$mail->send()) {
            echo 'No se pudo enviar el correo.';
        }
    }
}
