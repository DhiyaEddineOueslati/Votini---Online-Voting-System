<?php
session_start();
if (!isset($_SESSION['cin'])) {
    echo "<script>alert('Session expirée');</script>";
    echo "<script> window.open('login.php','_self') </script>";
    exit();
}

include "compte.php";

$query = "SELECT * FROM candidat";
$result = mysqli_query($conn, $query);

$cin = $_SESSION['cin'];
$citoyenQuery = "SELECT vote FROM citoyen WHERE cin = '$cin'";
$citoyenResult = mysqli_query($conn, $citoyenQuery);
$citoyenRow = mysqli_fetch_assoc($citoyenResult);
$hasVoted = $citoyenRow['vote'] === 'OUI';

if (mysqli_num_rows($result) > 0) {
    echo '<div class="row">';
    $hasDisplayedMessage = false; 
    while ($row = mysqli_fetch_assoc($result)) {
        $nom = $row['nom'];
        $partie = $row['partie'];
        $image_candidat = $row['image_candidat'];
        $nombre_vote = $row['nombre_vote'];
        
        echo '<div class="cont" >';
        echo '<div class="card" style="width: 16rem;">';
        echo '<img src="candidats/' . $image_candidat . '" class="card-img-top" alt="Candidate Image">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $nom . '</h5>';
        echo '<p class="card-text">Political Party: ' . $partie . '</p>';
        if (!$hasVoted) {
            echo '<form method="POST" action="vote.php">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<input type="submit" onclick="succe()" class="btn btn-primary" name="boutton" value="Votez">';
            echo '</form>';
        } 
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo 'Pas de candidat';
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap.css'>
   

</head>
<body>
    <style>
        body{
    background-image:url("bg.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin: 0;
    padding: 0;  
        }
        .cont{
            width: 100vh;
            height: 500px;
          display:inline-block; 
          
        }
        .cont .card{
            margin:0 auto;
        }
    </style>
<script>
function succe() {
  alert("Votre vote a été enregisté !");
}
</script>
</body>
</html>