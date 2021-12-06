<?php if (!isset($_POST['to'])) {

?>
    <form action="Admin_email.php" method="post">
        <p>email du nouvel admin</p>
        <input type="email" name="to">
        <input type="submit">
    </form>
<?php
} else {
    include("assets\PHP\Admin\connexion.php");
    $to = $_POST['to'];
    $subject = "mdp creator";
    $token = md5(rand() . time());
    $url =  "<a href=\"localhost:8080/stage/newmdp.php?token=" . $token . "\"> clickez ici pour initialiser le mdp</a>";
    mail($to, $subject, $url);


    $sql_select = 'SELECT * FROM admin WHERE Login = "' . $to . '"';
    $req = $pdo->query($sql_select);

    $already_exist = $req->fetch();
    if ($already_exist == false) {
        $sql_insert = "INSERT INTO admin (Login,token) VALUES (?,?)";
        $result = $pdo->prepare($sql_insert)->execute([$to, $token]);
    }
}

?>