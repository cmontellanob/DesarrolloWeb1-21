<?php session_start();
$correoelectronico = $_POST['correoelectronico'];
$password = sha1($_POST['password']);

if ($correoelectronico == "admin@sis256.com") {
    $_SESSION['nivel'] = 1;
    echo "Se autentico";
} else {
    echo  "Error";
}

if ($correoelectronico == "usuario@sis256.com") {
    $_SESSION['nivel'] = 0;
    echo "Se autentico";
} else {
    echo  "Error";
}
