<?php
$consumption = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kilometers = floatval($_POST['kilometers']);
    $liters = floatval($_POST['liters']);

    if ($kilometers > 0 && $liters > 0) {
        $consumption = $liters / $kilometers;
    } else {
        $error = "Por favor ingrese valores válidos.";
    }
}
?>
