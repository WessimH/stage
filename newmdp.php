<script src="assets\JavaScript\jquery-3.6.0.min.js"></script>
<script src="assets\JavaScript\app.js"></script>
<?php
if (isset($_GET["token"])) { #si le token n'est pas défini 
    $token = $_GET["token"];  #récup le token 
?>
    <form action="newmdp.php" method="post">
        <p>mot de passe</p>
        <input type="password" name="password" min="12" id="password">
        <p>confirmez votre mdp</p>
        <input type="password" name="password_confirm" min="12" id="password_confirm">
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
        $sql_insert = "UPDATE admin SET PASSWORD = :password, token = :token WHERE token = '" . $token_confirm . "'"; #on UPDATE



        $req = $pdo->prepare($sql_insert);
        $req->bindValue('password', $hash); #remplace les variables dans la rquette sql
        $req->bindValue('token', NULL);



        echo '\n';
        var_dump($sql_insert);
        echo '\n';
        var_dump($req);

        $req->execute(); #et on envoie la requête préparée
    }
}

?>