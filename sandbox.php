<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/CSS/style.css" />
    <title>Document</title>
  </head>
  <body>
    <form action="sandbox.php" method="post">
       <input type="date" name="text" id="text">
    </form>
   
  </body>
</html>
<?php function age($birthday)
  {
    $birthday = $_POST['text'];
    $date = date("ymd"); //ordre de la date year month day
    $age = date('Y', strtotime($date)) - (date('Y', strtotime($birthday))); //calule la différence entre la date de l'utulisateur et celle d'ajd en la convertissant au meme format
    if (strtotime(date('md')) < date('md', strtotime($date))) { /*si  le mois et le jours d'aujourd'hui dépasse la  date d'ajd alors age =age-1 */
      $age = $age - 1;
    }
    return $age;
  }
  echo(age($birthday));
  ?>