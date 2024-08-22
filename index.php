<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="indexstyle.css">
    <title>Creallusion</title>
</head>
<body>

<!-- Background video -->
<video autoplay loop muted id="bgvideo">
<source src="images/earthrotation.mp4" type="video/mp4"> 
</video>

<!-- Barre du haut -->
<div id="firstblock">

    <div id="menu">
    
        <p>Web design</p>
        <p>Graphisme</p>
        <p>Visibilité</p>
        <p>Montage</p>
        
    </div>     

<div id="title">
    <h1>CREALLUSION</h1>
    <img src="images/creallusion850.png" id="creallusion">
</div>

    <div id="loginorsubsection">
        <a href="loginorsub.php">Se connecter / Créer un compte</a>
    </div>

    <?php if(isset($_SESSION["user_id"])) { ?>

        <script>document.getElementById('loginorsubsection').style.display = 'none'</script>
        <div>
        <form action="includes/logout.inc.php" method="post">
            <button type="submit" id="logoutbutton">Se déconnecter</button>
        </form>
        </div>

    <?php } ?>

</div>

<!-- Explications des métiers -->

<div id="secondblock">

    <div id="webdevcontenant">

            <div id="webdevtitle">
                <h1>Une solution clé en main et un accompagnement complet pour créer votre site internet</h1>
            </div>


        <div id="webdevjunction">
            <div id="webdevcontenant1"> 
                <p>Maîtriser le développement web est essentiel pour créer un site internet efficace et attrayant. Cela permet de personnaliser le design et les fonctionnalités selon les besoins spécifiques, offrant ainsi une expérience utilisateur optimale. En comprenant les langages de programmation comme HTML, CSS et JavaScript, on peut résoudre rapidement les problèmes techniques et améliorer la performance du site. De plus, cela permet d’intégrer des outils et des fonctionnalités avancées, comme le référencement SEO, pour augmenter la visibilité en ligne. Confiez votre site internet à un développeur professionnel donne un contrôle total sur son site, garantissant ainsi sa réussite, son dynamisme et sa pérennité. Ne vous souciez pas du code pensez uniquement à votre vision.</p>
            </div>

            <div id="webdevcontenant2"> 
                 <img id="computer" src="images/computer.jpg">
            </div>
        </div>

    </div>


    <div id="identitevisuellecontenant">

        <div id="identitevisuelletitre">
            <h1>Créez votre identité visuelle</h1>
        </div>

        <div id="identitevisuelle">
            <p>Une identité visuelle bien définie est essentielle car elle permet de se démarquer dans un marché concurrentiel. Elle crée une reconnaissance immédiate et renforce la mémorabilité auprès des consommateurs. Les éléments visuels tels que le logo, les couleurs, et la typographie véhiculent les valeurs et la personnalité de la marque, établissant ainsi une connexion émotionnelle avec le public. De plus, une identité visuelle cohérente renforce la crédibilité et la confiance, tout en facilitant la communication et le marketing. En somme, une identité visuelle forte est un atout stratégique pour construire et maintenir une image de marque solide et distinctive. </p>  
        </div>

    </div>

    <div id="reseauxcontenant">

        <div id="reseauxtitre">
            <h1>Donnez de la visibilité à votre marque</h1>
        </div>

        <div id="reseauxjunction">
            <div id="slidercontenant">
                <div id="sliderimages">
                    <img src="images/tiktok.png" alt="tiktok" class="imagesfromslider">
                    <p>TikTok</p>
                    <img src="images/instagram.png" alt="instagram" class="imagesfromslider">
                    <p>Instagram</p>
                    <img src= "images/youtube.png" alt="youtube" class="imagesfromslider">
                    <p>Youtube</p>
                    <img src="images/tiktok.png" alt="tiktok" class="imagesfromslider">
                    <p>TikTok</p>
                    <img src="images/instagram.png" alt="instagram" class="imagesfromslider">
                    <p>Instagram</p>
                    <img src= "images/youtube.png" alt="youtube" class="imagesfromslider">
                    <p>Youtube</p>
                    <img src="images/tiktok.png" alt="tiktok" class="imagesfromslider">
                    <p>TikTok</p>
                    <img src="images/instagram.png" alt="instagram" class="imagesfromslider">
                    <p>Instagram</p>
                    <img src= "images/youtube.png" alt="youtube" class="imagesfromslider">
                    <p>Youtube</p>
                </div>
            </div>

            <div id="reseauxdescription">
                <p>La promotion de votre marque en ligne offre de nombreux avantages. Tout d’abord, elle permet d’atteindre un très large public, augmentant ainsi votre visibilité et vos opportunités de vente. De plus, les campagnes en ligne sont souvent plus économiques que les méthodes traditionnelles, tout en offrant des outils de mesure précis pour évaluer leur efficacité. En utilisant les réseaux sociaux et le marketing de contenu, vous pouvez également créer une communauté engagée autour de votre marque, renforçant ainsi la fidélité de vos clients. Enfin, la flexibilité des plate-formes en ligne vous permet d’adapter rapidement vos stratégies en fonction des tendances du marché et des retours clients. Exposez votre marque sur une de nos chaine partenaires avec à chaque fois plus de 10 000 abonnés</p>  
            </div>            
        </div>

    </div>

    <div id="montagecontenant">

        <div id="montagetitre">
            <h1>Tournage et montage de vos projets vidéos pour les réseaux sociaux</h1>
        </div>

        <div id="montagedescription">
            <p>L’art de tourner des vidéos pour les réseaux sociaux repose sur plusieurs éléments clés. Tout d’abord, il est essentiel de capturer l’attention rapidement, car les utilisateurs défilent souvent rapidement sur leurs fils d’actualité. Utilisez des plans dynamiques et des transitions fluides pour maintenir l’intérêt. La qualité visuelle et sonore est également cruciale, alors assurez-vous d’utiliser un bon éclairage et un micro de qualité. Pensez à adapter le format de la vidéo à la plate-forme, par exemple en utilisant des vidéos verticales pour Instagram et TikTok. Enfin, racontez une histoire captivante et engageante qui résonne avec votre audience. En maîtrisant ces aspects, vous pouvez créer des vidéos percutantes et mémorables pour les réseaux sociaux.</p>  
        </div>

    </div>



</div>
       

<!-- Se connecter pour laisser un commentaire -->

<?php
    /* show_login_success(); */
    user_login_success();
?>

<div id="commentaires">
    <a href="loginorsub.php">Se connecter</a>
    <p>et laisser un commentaire</p>   
</div>

<?php
    destroy_comment_section();
?>

<?php if(isset($_SESSION["user_id"])) { ?>

    <form id="notationform" action="includes/commenthandler.inc.php" method="post">
        <label>Espace commentaires</label>
        <textarea id="mytextarea" name="commenttextarea" placeholder="Vous pouvez écrire votre commentaire ici" maxlength="1000" oninput="updateCountdown()"></textarea><br>
        <div id="charCount"></div><br>
        <div>
        <label for="note" id="note">Combien d'étoiles nous mettez-vous?</label>
        <select id="notation" name="noteetoile">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
        </select></div><br>
        <button type="submit">Publier votre commentaire</button>
    </form><br>

    <style>
        #charCount {
            color: white;
            text-align: center;
        }
    </style>

    <script>
        function updateCountdown() {
            let remaining = 1000 - document.getElementById('mytextarea').value.length;
            document.getElementById('charCount').textContent = remaining + ' charactères restants';
        }

        // Initialize the counter when the page loads
        document.addEventListener('DOMContentLoaded', (event) => {
            updateCountdown();
        });
    </script>


<?php } ?>


<?php

if (isset($_SESSION['success_message'])) {
    echo "<p class='messagelaisse'>" . $_SESSION['success_message'] . "</p>";
    unset($_SESSION['success_message']);
} else if (isset($_SESSION['submission_error'])) {
    echo "<p class='notationremplir'>" . $_SESSION['submission_error'] . "</p>";
    unset($_SESSION['submission_error']);
}

?>


<div class="espacecommentaires">
    <?php
        require_once "includes/showcomments.php";
    ?>
</div>


<!-- Bannière des partenaires -->
<div id="partenaires">
    <div class="partenaires-images">
        <img src="images/adidas.png">
        <img src="images/audi.png">
        <img src="images/bmw.png">
        <img src="images/channel.png">
        <img src="images/cocacola.png">
        <img src="images/dior.png">
        <img src="images/hp.png">
        <img src="images/ibm.png">
        <img src="images/mcdonalds.png">
        <img src="images/pizzahut.png">
        <img src="images/unibat.png">
        <img src="images/ysl.png">
    </div>
</div>

<!-- Nes réseaux -->

<div id="contenant">

    <p>BESOIN DE VISIBILITÉ?</p>
    <p>Affichez-vous sur nos chaînes partenaires</p>

    <div class="chaines">

        <!-- What the food -->

        <div>    
            <img src="images/WTF.png" alt="whatthefood" class="imageschaines">
            <p>What the food</p>
        </div>

        <!-- Bedtime horror story -->

        <div>
            <img src="images/BHS.jpg" alt="Bedtimehorrorstory" class="imageschaines">
            <p>Bedtime Horror Story</p>
        </div>

        <!-- Games for kids -->

        <div>
            <img src="images/GFK.jpg" alt="gamesforkids" class="imageschaines">
            <p>Games for kids</p>
        </div>

    </div>

    <div id="liensreseaux">

        <div class="sousliensreseaux">
            <img src="images/youtube.png" alt="youtube" class="imagesreseaux">
            <p>+ de 1 000 abonnés</p><br>
            <img src="images/instagram.png" alt="instagram" class="imagesreseaux">
            <p>+ de 1 000 abonnés</p><br>
            <img src="images/tiktok.png" alt="tiktok" class="imagesreseaux">
            <p>+ de 1 000 abonnés</p><br>
        </div>


        <div class="sousliensreseaux">            
            <img src="images/youtube.png" alt="youtube" class="imagesreseaux">
            <p>+ de 2 000 abonnés</p><br>
            <img src="images/instagram.png" alt="instagram" class="imagesreseaux">
            <p>+ de 2 000 abonnés</p><br>
            <img src="images/tiktok.png" alt="tiktok" class="imagesreseaux">
            <p>+ de 2 000 abonnés</p><br>
        </div>


        <div class="sousliensreseaux">            
            <img src="images/youtube.png" alt="youtube" class="imagesreseaux">
            <p>+ de 3 000 abonnés</p><br>
            <img src="images/instagram.png" alt="instagram" class="imagesreseaux">
            <p>+ de 3 000 abonnés</p><br>
            <img src="images/tiktok.png" alt="tiktok" class="imagesreseaux">
            <p>+ de 3 000 abonnés</p><br>
        </div>


    </div>


</div>

<!-- Formulaire de contact -->

<div class="formcontainer">
<form action="includes/formhandler.php" method="post" id="formulaire">

<label for="choix">De qui avez-vous besoin?</label>
<select id="choix" name="choixbesoin">
    <option value="graphisme">D'un graphiste</option>
    <option value="montage">D'un monteur</option>
    <option value="webdeveloppement">D'un web développeur</option>
    <option value="visibilite">De visibilité (faites votre promotion sur nos chaînes partenaires)</option>
</select><br>

<label for="nom">Nom</label>
<input id="nom" type="text" name="nom" placeholder="Champ obligatoire"><br>

<label for="email">E-mail</label>
<input id="email" type="email" name="email" placeholder="Champ obligatoire"><br>

<label for="telephone">Téléphone</label>
<input id="telephone" type="tel" name="telephone" placeholder="Champ obligatoire"><br>

<label for="message">Message</label>
<textarea id="message" type="text" name="message" placeholder="Champ obligatoire" maxlength="1000"></textarea>

<span id="counter">1000 caractères restants</span><br>

<?php

if(isset($_SESSION['error'])){
    echo "<span class='error'>" . $_SESSION['error'] . "</span>";
    unset($_SESSION['error']);
}

if(isset($_SESSION['succes'])){
    echo "<span class='succes'>" . $_SESSION['succes'] . "</span>";
    unset($_SESSION['succes']);
}
?>

<br>

<button type="submit">Envoyer la demande</button><br>

</form>
</div>



<footer>

<h1>CREALLUSION</h1>
<p>Numéro de SIRET 123 456 789 000</p>
<p>Mentions légales</p>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="indexscript.js"></script>

</body>
</html>