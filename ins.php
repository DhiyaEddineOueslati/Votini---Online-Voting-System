
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-sScale=1'>
    <title>Inscription</title>

    <link rel='stylesheet' type='text/css' media='screen' href="ins.css">
    <link rel='stylesheet' type='text/css' media='screen' href="bootstrap.css">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>  
    
</head>

<body>
    <div class="registerform">
        <h1> formulaire de registration </h1>
        <div class="formcontainer">
        <form action="inscription.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nom"  placeholder="Nom" required>
            <input type="text" name="prenom" required placeholder="Prénom">
            <input type="tel" name="cin" pattern="[0-9]{8}" required placeholder="CIN">
            <input type="tel" name="num" pattern="[0-9]{8}" title="Veuillez saisir un CIN de 8 chiffres"  required placeholder="Numéro de téléphone"><br>
            <input type="email" name="Email" required placeholder="Email">
            <input type="date" name="dns" required placeholder="Date de naissance">
            
            <select id="sexe" name="sexe" class="form-select">
                <option value="" disabled selected style='color:white'>Genre</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            
                
                <select id="ville" name="ville" class="form-select">
                <option value="" disabled selected hidden>Gouvernorat</option>
                    <option value="Ariana">Ariana</option>
                    <option value="Beja">Beja</option>
                    <option value="Ben Arous">Ben Arous</option>
                    <option value="Bizerte">Bizerte</option>
                    <option value="Gabès">Gabès</option>
                    <option value="Gafsa">Gafsa</option>
                    <option value="Jendouba">Jendouba</option>
                    <option value="Kef">Kef</option>
                    <option value="Kairouan">Kairouan</option>
                    <option value="Kasserine">Kasserine</option>
                    <option value="Kébili">Kébili</option>
                    <option value="Mahdia">Mahdia</option>
                    <option value="Manouba">Manouba</option>
                    <option value="Médenine">Médenine</option>
                    <option value="Monastir">Monastir</option>
                    <option value="Nabeul">Nabeul</option>
                    <option value="Sfax">Sfax</option>
                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                    <option value="Siliana">Siliana</option>
                    <option value="Sousse">Sousse</option>
                    <option value="Tataouine">Tataouine</option>
                    <option value="Tozeur">Tozeur</option>
                    <option value="Tunis">Tunis</option>
                    <option value="Zaghouan">Zaghouan</option>
                </select>

                <input type="file" name="image" id="image" accept=".png , .jpg , .jpeg">
                <input type="password" name="Password" required placeholder="Password" >
            
            <input type="submit" value="S'inscrire" class="inscrire"><br>
        </form>
    </div>
    </div>


<form action="index.php" method="post" class="bottom" >
    <input type="submit" value="Retournez">
</form>

</body>
</html>
