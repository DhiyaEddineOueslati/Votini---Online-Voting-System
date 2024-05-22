<?php
    include_once 'index.php';

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "votini";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cin = $_POST["cin"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["Email"];
        $num = $_POST["num"];
        $image = $_FILES["image"]["name"];
        $password = $_POST["Password"];
        $dns = $_POST["dns"];
        $ville = $_POST["ville"];
        $sexe = $_POST["sexe"];
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO citoyen (cin, nom, prenom, email, num, image, password, dns, ville, sexe, vote) VALUES ('$cin', '$nom', '$prenom', '$email', '$num', '$image', '$hashedPassword', '$dns', '$ville', '$sexe', 'NON')";
        

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Enregistrement avec succés');</script>";

        } else {
            echo "<script>alert('Erreur d'enregistrement');</script>";

        }

        $target_dir = "photos/";  
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        
        $conn->close();
    }
?>
