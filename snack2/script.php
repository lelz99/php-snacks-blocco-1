<?php

$name = $_GET['name'] ?? '';
$email = $_GET['email'];
$number = $_GET['number'];


$message = 'Accesso Riuscito';

if(strlen($name) < 3 || !is_numeric($number)){
    $message = 'Accesso negato';
} elseif (!str_contains($email, '.') || !str_contains($email, '@')) {
    $message = 'Accesso Negato';
}

echo $message;

?>