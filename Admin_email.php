<?php if (!isset($_POST['to']))
{

 ?>
<form action="Admin_email.php" method="post" >
    <p>email du nouvel admin</p>
    <input type="email" name="to" >
    <input type="submit" >
</form>
<?php 
}

 else
{
    $to = $_POST['to'];
    $subject = "mdp creator";
    $token=md5(rand().time());
    $url =  "<a href=\"localhost:8080/stage/newmdp.php?token=".$token."\">clickez ici pour initialiser le mdp</a>";
    mail($to ,$subject, $url);
}
    
?>