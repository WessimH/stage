<?php
if (isset($_GET["token"])) {
    $token = $_GET["token"];
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
    include("assets\PHP\Admin\connexion.php");
    echo "verif mdp";
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $token_confirm = $_POST['token_confirm'];
    $options = [
        'cost' => 11
    ];


    $sql_select = 'SELECT * FROM admin';
    $req = $pdo->query($sql_select);




    if ($password == $password_confirm) {
        echo "enregistrement des données";
        $hash = password_hash($password, PASSWORD_BCRYPT, $options);
        $sql_insert = "UPDATE admin (Password,token) VALUES (?,?) WHERE  token = $token_confirm";
        $result = $pdo->prepare($sql_insert)->execute([$hash, NULL]);
    }
}

?>