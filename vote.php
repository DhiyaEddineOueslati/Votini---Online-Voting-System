<?php
include "acceuil.php";
include "compte.php";



if (isset($_POST['boutton'])) {
    
    $id = $_POST['id'];
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "votini";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    $cin = $_SESSION['cin'];
    
    $query = "UPDATE candidat SET nombre_vote = nombre_vote + 1 WHERE id = '$id'";
    $result1 = $conn->query($query);
    
   if($result1){
    $Rupdate = "UPDATE citoyen SET vote = 'OUI' WHERE cin = '$cin'";
    $Rrun_update = mysqli_query($conn, $Rupdate);
    

   }

    $conn->close();
}
?>
