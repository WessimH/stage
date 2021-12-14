<html>

<head>
</head>

<body>

  <h3>graph</h3>
  <?php
  function age($birthday)
  {
    $date = date("ymd"); //ordre de la date year month day
    $age = date('Y', strtotime($date)) - (date('Y', strtotime($birthday))); //calule la différence entre la date de l'utulisateur et celle d'ajd en la convertissant au meme format
    if (strtotime(date('md')) < date('md', strtotime($date))) { /*si  le mois et le jours d'aujourd'hui dépasse la  date d'ajd alors age =age-1 */
      $age = $age - 1;
    }
    return $age;
  }
  ?>

  <canvas id="myChart" width="300" height="300"></canvas>
  <script src="..\assets\JavaScript\chart.js"></script>

  <?php
  include("..\assets\PHP\Admin\connexion.php"); #on inclu la connexion

  $sql_select = 'SELECT birthday FROM contact';
  $req = $pdo->query($sql_select);

  $age_db = []; // Tableau des différents Age rencontrés
  while ($row = $req->fetch()) {
    $date = $row['birthday'];
    $age_db[] = age($date); // Cette ligne équivaut à array_push($age_db, age($date));  
  }

  $tab_repartion_age = array_count_values($age_db);  // tableau de la répartition des âges
  ksort($tab_repartion_age);

  echo "<script>
const ctx = document.getElementById('myChart');
let delayed;
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ";
  //exemple : ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
  $str = "[";
  foreach ($tab_repartion_age as $key => $value) {
    $str = $str . $key . ",";
  }
  $str = substr($str, 0, strlen($str) - 1) . "],";
  echo $str;


  echo "
        datasets: [{
            label: '# of Votes', 
            ";

  //exemple :        data: [12, 19, 3, 5, 2, 3],



  // }
  $str = "data: [";
  foreach ($tab_repartion_age as $key => $value) {
    $str = $str . $value . ", ";
  }
  $str = substr($str, 0, strlen($str) - 1) . "],";

  echo $str;
  echo "
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options:{
        indexAxis: 'y',
          animations: {


            x: {
              easing: 'easeInOutElastic',
              from: (ctx) => {
                if (ctx.type === 'data') {
                  if (ctx.mode === 'default' && !ctx.dropped) {
                    ctx.dropped = true;
                    return 0;
                  }
                }
              }
            }
          },
        // Elements options apply to all of the options unless overridden in a dataset
        // In this case, we are setting the border of each horizontal bar to be 2px wide
        elements: {
          bar: {
            borderWidth: 2,
          }
        },
        responsive: true,
        plugins: {
          legend: {
            position: 'right',
          },
          title: {
            display: true,
            text: 'Chart.js Horizontal Bar Chart'
          }
        }
      },
});";
  ?>


  </script>


</body>

</html>