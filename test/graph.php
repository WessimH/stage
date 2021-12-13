<h1>ON A PAS ENREGISTRE LES AGES DANS LA DB🤣</h1>
<?php

include("../assets/PHP/Admin/connexion.php");
    $sql_select = 'SELECT * FROM contact';
    $req = $pdo->query($sql_select);
    echo"[13:44] Wessim HARMEL
    <script src='https://d3js.org/d3.v7.min.js'></script>";
    $age_count = $row('birthday');
    echo"<script>";
        
   while ($row = $req->fetch()) {
       $age = $row['birthday']; //pas compris l'erreur 

       // age = Array(10) [age1, age2]// on a 10 ages différents

    echo"
    AG = [
        //while ($row = $req -> fetch())

        x : '2', y : 'ageNB' , z : '3'
        




    ]
    Plot.barX(AG, {x: 'age', y: 'age_nb', z : 'test'}).plot() 
        function TAB(){
            agedb =  " . $row['birthday'] . "

            age : 'age_db', 'ageNB' : age_count
        }";

    }  
    echo"</script>";
?>