<?php
$already_exist = false; //flag
$nom = htmlspecialchars($_POST['nom']); // Et on sécurise avec htmlspecialchars()
$prenom = htmlspecialchars($_POST['prenom']);
// Suite du script [...]
$birthday  = $_POST['birthday']; //$_POST["nom de l'input"] vien chercher l'input dans l'HTML
$date = date("ymd");//ordre de la date year month day
$inscription_date = date('d/m/y');//date = donne la date d'ajd



$age = date('Y',strtotime($date))-(date('Y',strtotime($birthday))); //calule la différence entre la date de l'utulisateur et celle d'ajd en la convertissant au meme format

if (strtotime(date('md')) < date('md', strtotime($date)) ) { /*si  le mois et le jours d'aujourd'hui dépasse la  date d'ajd alors age =age-1 */ 
    $age=$age - 1;
}






echo '<p>Lecture des données de la table</p>';
$sql_select = 'SELECT * FROM contact';
$req = $pdo->query($sql_select);
while($row = $req->fetch()){
    if ($nom == $row['name'] && $prenom == $row['first_name'])
    {
        $already_exist = true;
    } 
    
} //rant que on a pas vu de doublon 


if ($already_exist != true ){
    
    // requette insetion a la base de donnée
    
    echo "Ajout des informations à la BDD \r\n" ;
    $sql_insert = "INSERT INTO contact (first_name, name, birthday, date_creation) VALUES (?,?,?,?)";
    $result = $pdo->prepare($sql_insert)->execute([$prenom, $nom, $birthday, $date]);
    
    if ($result) {
        echo "<p>Données enregistrées </p>";
    }
    else
    {
        echo "<p><strong>ne peut ajouter $prenom </strong></p>";
    }

}


