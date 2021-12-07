<?php

include('connexion.php');
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);

$sql_select = 'SELECT * FROM contact';
$req = $pdo->query($sql_select);



$sql_select = 'SELECT * FROM admin';


$sql_select = "SELECT * FROM admin WHERE Login = '" . $login . "'"; 
$req = $pdo->query($sql_select);


while ($row = $req->fetch()) {  
    if ($login == $row["Login"] && password_verify($password, $row['Password'])) {
        $_SESSION['$Is_logged'] = true; #oui il est créé 
    } else {
        header("assets\PHP\Admin\back-end_signup.php");
        echo "Error :  Identifiant ou mot de passe incorrect";
    }
}
