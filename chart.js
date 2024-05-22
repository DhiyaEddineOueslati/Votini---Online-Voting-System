google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['nom', 'nombre_vote'],
          
         <?php
         $sql = "SELECT * FROM candidat";
         $fire = mysqli_query($conn,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['nom']."',".$result['nombre_vote']."],";
          }
         ?>

        ]);

        var options = {
          title: 'Résultat immédiat'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }