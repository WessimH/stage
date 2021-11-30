<?php
include("connexion.php"); // declare la variable $pdo pour connexion à la BDD erp

date_default_timezone_set('Europe/Paris');

if( isset($_POST['nom'  ] )&& isset($_POST['prenom']) ) // On vérifie si le formulaire a été validé (si la variable existe)
{
   include("insert_form.php");
}

?>

<style>
tr{
    border: solid 1px red;
}

</style>

<table border="1" cellspacing="5">
    <thead>
        <tr>
            <td>id</td>
            <td>Nom</td>
            <td>prénom</td>
            <td>age </td>
            <td>date d'inscripton</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
<?php
    $sql_select = 'SELECT * FROM contact ORDER BY birthday';
    $req = $pdo->query($sql_select);
    while($row = $req->fetch()){
        $id = $row['id'];
        $nom = $row['name'];
        $prenom = $row['first_name'];
        $anniv = $row['birthday'];
        $date_creation = $row['date_creation'];
        echo"
        <tr>
            <td>$id</td>
            <td>$nom</td>
            <td>$prenom</td>
            <td>$anniv </td>
            <td>$date_creation</td>
            <td>Editer / Supprimer</td>
        </tr>";
    }

    ?>
    </tbody>
</table>