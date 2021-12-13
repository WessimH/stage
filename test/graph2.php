<html>
<head>
</head>

<body>

<h3>graph</h3>
<?php
function age($birthday) {
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
echo "<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes', ";

//            data: [12, 19, 3, 5, 2, 3],
    
    include("..\assets\PHP\Admin\connexion.php"); #on inclu la connexion

    $sql_select = 'SELECT birthday FROM contact';
    $req = $pdo->query($sql_select);

    $age_db = [];
    while ($row = $req->fetch())
    {
        $date = $row['birthday']; 
        $age = age($date); 
        
        array_push($age_db, age($date));

    }
    var_dump($age_db);
    //   data: [12, 19, 3, 5, 2, 3,
    echo $str;

    echo"
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
    options: {
        indexAxis: 'y',
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
