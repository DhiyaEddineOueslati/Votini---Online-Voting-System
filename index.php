<?php
    //connexion à la bdd

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "votini";

    $conn = new mysqli($servername, $username, $password, $dbname);

     if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }       
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset='utf-8'>
    <title>VOTINI</title>
    <meta name='viewport' content='width=device-width, initial-sScale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!--script pour la chart qui présente les résultats de vote -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
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
            backgroundColor: 'transparent',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</head>



<body>

    <!--barre de navigation bootstrap -->

    <div class="bg">
        <header class="header navbar-fixed-top">
            <ul>
                
                <li><a href="#acceuil">Accuiel</a></li>
                <li><a href="#propos">À propos de l'élection</a></li>
                <li><a href="#candidat">Voir les candidats</a></li>
                <li><a href="#res">Résultats</a></li>

                
            </ul>
        </header>

         <!-- partie de l'acceuil -->

        <section class="cent" id="acceuil">
            <h1 id="text">&quot; Votez Pour <br> Notre Tunisie &quot;</h1><br><br>
        </section>

                <!-- boutton inscription -->
                <form action="ins.php" method="post" class="inscrit" >
                    <input type="submit" value="S'inscrire" class="ins">
                </form>
                <!-- boutton login -->
                <form action="login.php" method="post" class="login" >
                    <input type="submit" value="Votez maintenant !" class="ins">
                </form>

    </div>
    <!--  fin partie nav bar + acceuil  -->

    <!--  partie à propos -->

    <div  id="propos" class="second">

    <br><br>
        <h1>À propos de l'élection en ligne</h1>
        <br><br>

        <p>
        L'élection présidentielle en ligne en Tunisie sur la platforme votini.tn 
        est un processus électoral où les citoyens tunisiens peuvent exercer leur
        droit de vote pour élire leur président via des plateformes en ligne. 
        <br><br>
        Cette élection est gérée par l’Instance Supérieure Indépendante pour
        les Élections (ISIE) qui est une instance 
        publique indépendante dotée de la personnalité morale et de 
        l’autonomie financière et administrative ayant son siège à Tunis et 
        dont la mission principale consiste à assurer des élections et des 
        référendums démocratiques libres, pluralistes, honnêtes et transparentes.
        <br><br>
        Afin de voter, les électeurs doivent suivre un chemin facile et pratique:
        <br><br> 1- Accès à la plateforme : Les citoyens tunisiens doivent s'accéder à la plateforme votini.tn.
        <br> 2- Une fois ils ont accedé, les électeurs pourront consulter les informations sur les candidats, leurs programmes, leurs profils, etc., afin de prendre une décision éclairée.
        <br> 3- Inscription en ligne :Les citoyens tunisiens éligibles doivent s'inscrire en ligne.
        <br> 4- Connexion : aprés avoir un compte , ils peuvent acceder à leurs comptes
        <br> 5- Vote en ligne : Les électeurs peuvent exercer leur droit de vote seulement une fois en sélectionnant leur candidat préféré sur la plateforme de vote en ligne.
        <br> 6- Annonce des résultats : Une fois les résultats officiellement validés, ils sont annoncés publiquement en fur et à mesure via la platforme.
    </p>

    </div>

    <!--  partie des candidats -->

    <div class="third" id="candidat">
        <br><br>
        <h1 >Les candidats</h1>
        <br><br>
        
        <div class="card-container">
            <!--  premier candidat -->
    <div class="card">
        <br><br>
        <video width="720" height="430" controls>
            <source src="candidat1.mp4" type="video/mp4">
        </video>
    </div>
            <!--  deuxième candidat -->
    <div class="card">
        <br><br>
        <video width="720" height="430" controls>
            <source src="candidat2.mp4" type="video/mp4">
        </video>
    </div>
            <!--  troisième candidat -->
    <div class="card">
        <br><br>
        <video width="720" height="430" controls>
            <source src="candidat3.mp4" type="video/mp4">
        </video>
    </div>
</div>

        <br><br>
       
    </div>
<!--  partie des résultats -->
    <div class="third" id="res">
        <br><br>
        <h1>Résultats</h1>
        <br><br>

        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <br><br>
       
    </div>

    <!-- Footer -->

    <footer>
        <center>
            <div class="sociallogo">
                <a href="facebook.com/Votini"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="instagram.com/Votini"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="twitter.com/Votini"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="Linkedin.com/Votini"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
            
                <br>
                <h3>Contact</h3>
                
                <h4>dhiya.eddine.oueslati@votini.tn</h4>
             <br>
                </h4>&copy Copyright Dhiya Eddine Oueslati - ENIG 2023</h4>
        </center>
    </footer>
   
</body>

</html>