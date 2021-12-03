<?php

include('connexion.php');
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);



$sql_select = 'SELECT * FROM admin';
$req = $pdo->query($sql_select);

while ($row = $req->fetch()) {
    echo "vrm stp";
if ( $login == $row["Login"] && $password == $row["Password"])
{
    $_SESSION['$Is_logged'] = true;
    echo "oui";
}
else{
    header("assets\PHP\Admin\back-end_signup.php");
}}

echo 'Argon2i hash: ' . password_hash('rasmuslerdorf', PASSWORD_ARGON2I);