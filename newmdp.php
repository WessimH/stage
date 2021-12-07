<?php
if (isset($_GET["token"])) { #si le token n'est pas défini 
    $token = $_GET["token"];  #récup le token 
?>
    <form action="newmdp.php" method="post">
        <p>mot de passe</p>
        <input type="password" name="password" min="12">
        <p>confirmez votre mdp</p>
        <input type="password" name="password_confirm" min="12">
        <input type="text" value="<?= $token ?>" name="token_confirm">
        <input type="submit">
    </form>

<?php
}
if (isset($_POST['password_confirm'])) {
    include("assets\PHP\Admin\connexion.php"); #on inclu la connexion 
    echo "verif mdp";
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $token_confirm = $_POST['token_confirm'];
    $options = [ #on défini le temps par rapport au cryptage 
        'cost' => 11
    ];


    $sql_select = 'SELECT * FROM admin';
    $req = $pdo->query($sql_select);

    echo " test";
    var_dump($password);
    var_dump($password_confirm);


    if ($password == $password_confirm) { #on vérifie que les 2 champs correspondent 
        echo "enregistrement des données";
        $hash = password_hash($password, PASSWORD_BCRYPT, $options); #on crypte le mdp avec la métode BCRYPT
        var_dump($hash);
        $sql_insert = "UPDATE admin 
        SET PASSWORD = '?',token = '?'  
        WHERE token = '" . $token_confirm ."'"; #on UPDATE
        var_dump($sql_insert);
        $result = $pdo->prepare($sql_insert)->execute([$hash, NULL]); #et on envoie
    }
}

?>