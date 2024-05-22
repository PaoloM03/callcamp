<?php 
include_once "funzioni.php";
session_start();

$operazione = $_REQUEST["operazione"];
    switch($operazione) {
        case "login":
            $email = $_POST["email-login"];
            $password = $_POST["password-login"];
            login($email, $password);
            break;
        case "costo_persona":
            $campo = $_POST["campo"];
            $costo = costo_persona_campo($campo);
            echo json_encode($costo);
            break;
    }
?> 