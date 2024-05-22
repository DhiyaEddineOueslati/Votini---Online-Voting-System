<?php

$conn = mysqli_connect('localhost', 'root', '', 'votini');
if (!isset($_SESSION['cin'])) { 
 
}

$cin = $_SESSION['cin'];
$select = "SELECT * from citoyen where cin='$cin'";

$nav = mysqli_query($conn, $select);
$row_citoyen = mysqli_fetch_array($nav);
$nom = $row_citoyen['nom'];
$prenom = $row_citoyen['prenom'];
$ville = $row_citoyen['ville'];
$dns = $row_citoyen['dns'];
$vote = $row_citoyen['vote'];
$image = $row_citoyen['image'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' type='text/css' media='screen' href='compte.css'>
 
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
  
</head>

<body>
<div class="space">
    <div class="card">
      <center>
        <img src="photos/<?php echo $image; ?>" alt="vous" class="rounded-circle" width="150">
      </center>
      <div class="card-body">
        <h6 class="card-title">Nom : <?php echo $nom; ?></h6>
        <h6 class="card-title">Prenom : <?php echo $prenom; ?></h6>
        <h6 class="card-title">Ville : <?php echo $ville; ?></h6>
        <h6 class="card-title">Date de naissance : <?php echo $dns; ?></h6>
        <h6 class="card-title">Déja voté : <?php echo $vote; ?></h6>
        
      </div>
    </div>
    <a href="deconnexion.php"><i class="fas fa-sign-out-alt"></i>Deconnexion</a>
  </div>
    
</body>
</html>