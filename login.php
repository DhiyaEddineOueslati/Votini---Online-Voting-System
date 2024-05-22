<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' type='text/css' media='screen' href="ins.css">
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
    <link rel='stylesheet' type='text/css' media='screen' href="bootstrap.css">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Inscription</title>
    
</head>

<body>
    <div class="registerform">
        <h1>Connexion</h1><br><br><br><br>
        <div class="formcontainer">
        <form action="authentification.php" method="POST" >
            <input type="tel" name="cin" required placeholder="CIN">
            <input type="password" name="password" required placeholder="Password"><br><br>
            <input type="number" name="code_entree" required placeholder="Entrer le code">
            <input type="submit" value="Se connecter" class="inscrire"><br>
           <div class="code">
           <?php
    $randomCode = rand(1000, 9999);
    echo "Code: " . $randomCode;
    echo "<input type='hidden' name='random_code' value='$randomCode'>";
  ?>
 
  <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
            </div>
        </form>
        </div>
    </div>

<form action="index.php" method="post" class="bottom" >
    <input type="submit" value="Retournez">
</form>
  
</body>
</html>
