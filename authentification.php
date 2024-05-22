<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "votini";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }  

    $cin = $_POST['cin'];
    $password = $_POST['password'];

    $query = "SELECT * FROM citoyen WHERE cin = '$cin'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        if (password_verify($password, $storedPassword)) {
            session_start();
            $_SESSION['cin'] = $cin;
            header("Location: acceuil.php");
            exit();
        }
    }

    echo "<script>alert('Vérifier vos paramètres');</script>";
    echo "<script>window.open('login.php','_self');</script>";
    exit();

    $conn->close();
?>
