<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginorsubstyle.css">
    <title>Se connecter</title>
</head>
<body>

<video autoplay loop muted id="bgvideo">
<source src="images/earthrotation.mp4" type="video/mp4"> 
</video>


<div class="container">


    <div class="logindiv">

        <form action="includes/login.inc.php" method="post">

                <p>SE CONNECTER</p>

                    <div class="logindiv1">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" class="inputs" id="login-username" name="usernamelog" placeholder="entrez une valeur"/>
                    </div>

                    <div class="logindivemail">
                    <label for="emaillogin">E-mail:</label>
                    <input type="email" class="inputs" id="login-email" name="emaillogin" placeholder="entrez une valeur"/>
                    </div>

                    <div class="logindiv2">
                    <label for="password">Mot de passe:</label>
                    <input type="text" class="inputs" id="login-password" name="passwordlog" placeholder="entrez une valeur"/>
                    </div>

                    <div class="loginbutton">
                    <button type="submit">Se connecter</button>
                    </div>

                    <div><a href="reset-password.php">Mot de passe oublié</a></div>

        </form>

    </div>

    <div class="subscribediv">

        <form action="includes/signup.inc.php" method="post">
                
                <p>CRÉER UN COMPTE</p>

                    <div class="subdiv1">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" class="inputs" id="sub-username" name="usernamesub" placeholder="entrez une valeur"/>
                    </div>

                    <div class="subdivemail">
                    <label for="emailsubscription">Email:</label>
                    <input type="email" class="inputs" id="subemail" name="emailsub" placeholder="entrez une valeur"/>
                    </div>

                    <div class="subdiv2">
                    <label for="password">Mot de passe:</label>
                    <input type="text" class="inputs" id="sub-password" name="passwordsub" placeholder="entrez une valeur"/>
                    </div>

                    <div class="subscribebutton">
                    <button type="submit">Créer un compte</button>
                    </div>

        </form> 

    </div> 

</div>

<div id="potentialerrors">

    <?php
    check_login_errors();
    check_signup_errors();
    ?>

</div>




</body>
</html>