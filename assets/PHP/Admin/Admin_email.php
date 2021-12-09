
<?php 
include("../template/header.php");



if (!isset($_POST['to'])) {

?>
    <form action="Admin_email.php" method="post">
        <p>email du nouvel admin</p>
        <input type="email" name="to">
        <input type="submit">
    </form>
<?php
} else {
    include("connexion.php");
    $to = $_POST['to'];
    $subject = "mdp creator";
    $token = md5(rand() . time()); #créeation du token 
    $url =  "<a href=\"localhost:8080/stage/newmdp.php?token=" . $token . "\"> clickez ici pour initialiser le mdp</a>"; #création du lien avec le $token a l'intérieur
    mail($to, $subject, $url); #evoi du maail 


    $sql_select = 'SELECT * FROM admin WHERE Login = "' . $to . '"';
    $req = $pdo->query($sql_select);

    $already_exist = $req->fetch();
    if ($already_exist == false) { #on évte les doublons 
        $sql_insert = "INSERT INTO admin (Login,token) VALUES (?,?)";
        $result = $pdo->prepare($sql_insert)->execute([$to, $token]); #on les envois a la base de données 
    }
}

?>