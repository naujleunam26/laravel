<?php
namespace App\Models;

class Calculator
{
    public function __construct()
    {
        // Constructor simple
    }

    public function calculateBMI($weight, $height)
    {
        // Fórmula básica del IMC
        return $weight / ($height * $height);
    }

    public function convertCurrency($amount, $rate)
    {
        // Conversión simple de divisas
        return $amount * $rate;
    }
}
