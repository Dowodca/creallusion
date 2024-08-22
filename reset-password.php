<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reset-passwordstyle.css">
    <title>Mot de passe oublié</title>
</head>
<body>

<video autoplay loop muted id="bgvideo">
<source src="images/earthrotation.mp4" type="video/mp4"> 
</video>

<div id="motdepasseoublie">

    <h1>Mot de passe oublié</h1>
    <p>Vous avez demandé à réinitialiser votre mot de passe.<br>
    Pour des raisons de sécurité veuillez saisir votre adresse e-mail ci-dessous afin qu'un lien de réinitialisation sécurisé vous soit envoyé.</p>

    <form action="includes/reset-request.inc.php" method="post">
        <input type="text" name="email" placeholder="Saisissez votre adresse e-mail ici">
        <button type="submit" name="reset-request-submit">Recevoir un e-mail de réinitialisation</button>
    </form>

</div>

<?php 
    
    if (isset($_GET['reset']) && $_GET['reset'] == "success") {
        echo '<p class="signupsuccess">Vérifiez votre boîte e-mail</p>';
    }
?>
    
</body>
</html>