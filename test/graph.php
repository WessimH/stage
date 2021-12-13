<h1>ON A PAS ENREGISTRE LES AGES DANS LA DB🤣</h1>
<?php

include("../assets/PHP/Admin/connexion.php");
    $sql_select = 'SELECT * FROM contact ORDER BY birthday';
    $req = $pdo->query($sql_select);
    echo"<script src='../JavaScript/d3.v7.min.js'></script>";
    
    echo"<script>";
        
    while ($row = $req->fetch()) {
       $age = $row['birthday']; //pas compris l'erreur 
       echo "console.log($age)";
       // age = Array(10) [age1, age2]// on a 10 ages différents
    }
    echo"</script>";
?>