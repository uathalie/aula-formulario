<?php
$senha = 123;
$login = "nana";

$loginDigitado = $_POST ['login'];
$senhaDigitada = $_POST ['senha'];
$email = $_POST ['email'];
$dtcad = $_POST ['dtcad'];

if ($login == $loginDigitado and $senha == $senhaDigitada){
    echo "Olá, $login :)";
} else {
    echo "Rala!";
}