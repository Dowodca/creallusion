<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du mot de passe</title>
</head>
<body>

<video autoplay loop muted id="bgvideo">
<source src="images/earthrotation.mp4" type="video/mp4"> 
</video>

<?php

    $selector = $_GET['selector'];
    $validator = $_GET['validator'];

    if (empty($selector) || empty($validator)) {

        echo "Utilisateur non authentifié pas de permission de changer le mot de passe";

    } else {

        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
            ?>

            <form action="includes/reset-password.inc.php" method="post">
                <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                <input type="password" name="pwd" placeholder="Tapez votre nouveau mot de passe">
                <input type="password" name="pwd-repeat" placeholder="Répétez votre nouveau mot de passe">
                <button type="submit" name="reset-password-submit">Réinitialisez votre mot de passe</button>
            </form>

            <?php
        }

    }

?>
    
<?php  

if (isset($_GET['newpwd'])) {
    if ($_GET['newpwd'] === "empty") {
        echo '<p class="passworderror">Vous n\'avez pas rempli tous les champs</p>';
    } elseif ($_GET['newpwd'] === "pwdnotsame") {
        echo '<p class="passworderror">Les mots de passe ne correspondent pas</p>';
    }
}

?>



</body>
</html>