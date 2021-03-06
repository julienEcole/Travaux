<?php 
 if(!isset($_COOKIE["pseudo"])){
 setcookie('pseudo', "guest", time() + 60*60, null, null, false, true);} //determination du cookie pseudo pour activité 4  
?>

<!doctype html>
<html>
<head>
<title>mon CV d'étudiant</title>
<link rel="stylesheet" type="text/css" href="style.css">
<metacharset="utf-8">
</head>
<body class="couleurClair">
<!-- Début de l'entête -->
<header><h2>Mon CV d'étudiant</h2></header>
<!-- Fin de l'entête -->
<!-- Début du menu de navigation -->
<nav class="couleurFonce" id="nav"> 
    <dl>
        <dt><button id="nav_mon_cv">Mon CV</button></dt>
        <!--<dt><button id="nav_mon_site">Mon site</button></dt>-->
        <dt><button id="nav_inscription"> <?php if($_COOKIE["pseudo"] != "guest"){  //l'exo de l'activité 4 sur cette ligne et les 3 autres aini que la détermination du cookie en ligen 2
            echo ("<a href="rest.php?profil"> Profil </a> </a>");}
        else{
            echo ("<a href=""> Se connecter </a>")};?></button></dt>
        <dt><button id="nav_connexion"><?php if($_COOKIE["pseudo"] != "guest"){     //l'exo de l'activité 4 sur cette ligne et les 3 autres aini que la détermination du cookie en ligen 2
            echo ("<a href='rest.php?deconnexion'> Se deconnecter </a>");}          //en appuyant sur ce bouton on lance le processus de déconnexion
        else{
            echo ("<a href=""> S'inscrire </a>")};?></button></dt>
    </dl>



</nav>
<!-- Fin du menu de navigation -->
<!-- Début de la barre latérale -->
<aside class="couleurFonce" id="aside">
    <h1>Quelques liens utiles pour développer son site internet</h1>
    <p>Pour en apprendre les bases du HTML en partant de 0 :<a href="https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/Les_bases_HTML">developer.mozilla</a>.</p>
    <p>utile pour quelque problème particulier pour le HTML ou d'autre language de programation :<a href="https://www.it-swarm.dev/fr/html/">it-swarm.dev</a> (ce lien vous amènes dans la section HTML mais libre a vous de vous ballader dans le reste du site).</p>
    <p>Pour en apprendre les bases du CSS en partant de 0 :<a href="https://developer.mozilla.org/fr/docs/Apprendre/Commencer_avec_le_web/Les_bases_CSS">developer.mozilla</a>(CSS cette fois ci).</p>
    <p>OpenClassroom et aussi une très bonne plateforme pour apprendre a coder a partir de zero.</p>
</aside>
<!-- Fin de la barre latérale -->
<!-- Début de la section principale -->
<section class="couleurClair" id="section">
    <div4 id="mon CV">
        <h2 id="title">information personnel</h2>
        <!--<video id="photo-identite" controls="controls">
            <source src="video/test.mp4" type="video/mp4">
            <source src="video/test.webm" type="video/webm">
            <source src="video/test.ogv" type="video/ogg">
        </video>-->    
    
    <img id="photo-identite" 
            src="exemple.jpg" 
            title="ma photo d'identité" 
            alt="une simple photo de moi pour que vous sachiez a quoi je ressemble."
			style="height:330px">
			
        <p id="important">Rivière Julien</p>
        <p>06 14 76 46 73</p>
        <p><a href="julien.riviere94120@gmail.com">julien.riviere94120@gmail.com</a></p>
        <p> Je cherche un stage dans le domaine de la programation ou du réseau<br/> du 24 mai au 2 juillet (6 semaines).</p>
        <h2>Formations :</h2>
        <table id="table">
            <tr style="background-color :rgb(185, 185, 185);">
                <td>année</td>
                <td>diplome</td>
                <td>établissement</td>
            </tr>
            <tr style="background-color: rgb(145,145,145)">
                <td>2018-2019</td>
                <td>bacalauréa technologique</td>
                <td>lycée Louis Armand, Nogent-sur-Marne</td>
            </tr>
            <tr style="background-color: rgb(145,145,145)">
                <td>2015-2016</td>
                <td>Brevet des collèges</td>
                <td>Collège victor Duruy, Fontenay sous bois</td>
            </tr>
        </table>
        <h2>Expèrience profesionnel</h2>
        <table id="table">
            <tr style="background-color :rgb(185, 185, 185)">
                <td>Durée</td>
                <td>Mission</td>
                <td>Entreprise</td>
            </tr>
            <tr style="background-color: rgb(145,145,145)">
                <td>Une semaine</td>
                <td>Stage d'observation dans le secteur informatique de l'entreprise.</td>
                <td>Safran Electronics & Defense</td>
            </tr>
        </table>
        <h2>Langages appris :</h2>
        <ol>
            <li>Français (ma langue natale)</li>
            <li>Anglais (a un niveau B2)</li>
            <li>Espagnol (a un niveau débutant)</li>
        </ol>
        <br />       
        <h2>Langages de programation maîtrisés :</h2>
        <table id="table">
        <tr style="background-color :rgb(185, 185, 185)">
            <td>Language</td>
            <td>Durée de formation</td>
            <td>Compétence aquises :</td>
        </tr>
        <tr style="background-color: rgb(145,145,145)">
            <td>C++</td>
            <td>8 semaines</td>
            <td>
                <p>- Maîtrise de la programation orienté objet en c++</p>
                <p>- Utilisation de Qt/embarcadero pour les programes avec interface graphique.</p>
            </td>
        </tr>
        <tr style="background-color :rgb(185, 185, 185)">
            <td>HTML/CSS/javascrypt</td>
            <td>8 semaines</td>
            <td>
                <p>- Création de page web.</p>
                <p>- Gestion de l'écriture par automatisation.</p>
				<p>- Apprentissage de la dynamisation des pages par utilisation du language javascrypt.</p>
            </td>
        </tr>
        <tr style="background-color: rgb(145,145,145)">
            
			<td>C#</td>
            <td>14 semaines</td>
            <td>
                <p>- Maîtrise des fonction itérative.</p>
                <p>- Programme orienté objet.</p>
                <p>- Gestion des erreurs</p>
                <p>- Apprentissage rapide de la syntaxe</p>
            </td>
        </tr>
        <tr style="background-color :rgb(185, 185, 185)">
            
			<td>OCaml</td>
            <td>12 semaines</td>
            <td>
                <p>- Initiation au codage</p>
                <p>- Maîtrise des fonctions recurcive</p>
                <p>- Initiation au codage sur les languages fonctionnel</p>
                <p>- Apprentissage de l'importance de l'optimisation du code</p>
                <p>- Apprentisasage des différents type qu'une variable peut avoir</p>
            </td>
        </tr>
        </table>
        <h2>Mes loisirs :</h2>
        <ol>
            <li>Le jeu de rôle</li>
            <li>Les jeux vidéos</li>
            <li>Les jeux de plateaux</li>
            <li>La résolution de problème logique</li>
        </ol>
    </div4>
    
    <div5 id="inscription">
        <h1>Inscrivez vous !</h1>
        </br>
        <label for="last_name">Nom :<br /></label>
        <input type="text" id="last_name" name="user_last_name">
        <br />
        <label for="first_name">Prenom :</br></label>
        <input type="text" id="first_name" name="user_first_name">
        <br />
        <label for="mail">Adresse mail :</label></br>
        <input type="email" id="mail" name="user_mail">
        <br />
        <label for="birth_date">Date de naissance :<br /></label>
        <input type="date" id="birth_date" name="user_birth_date" />
        <br />
        <label for="pseudo">Pseudo :</br></label>
        <input type="text" id="pseudo" name="user_pseudo">
        <br />
        <label for="password">mot de passe :<br /></label>
        <input type="password" id="password" name="password_user">
        <br />
        
        <mdp id="mdp_nb_caractere">8 caractères </mdp> avec au moins :
        <mdp id="mdp_majuscule">1 Majuscule</mdp>, 
        <mdp id="mdp_minuscule">1 minuscule</mdp>, 
        <mdp id="mdp_chiffre">1 chiffre</mdp>, 
        <mdp id="mdp_special">1 caractère spécial</mdp><br/>


        <label for="verification">Ressaisir le mot de passse :</label><br/>
        <input type="password" id="verification" name="user_password_verification" /><br/>
        <label for="inscription"></label>
        <input type="submit" id="inscription" name="inscription" value="M'inscrire">
    </div5>
	
	<div6 id="connexion">
        <h1>Identifiez-vous !</h1>        
        <label for="pseudo">Pseudo :<br/></label>
        <input type="text" id="pseudo" name="pseudo_utilisateur">
    <br/>
        <label for="mdp">mot de passe :<br/></label>
        <input type="password" id="mdp" name="mdp_utilisateur">
    <br/>
        <label for="validation"></label>
        <input type="submit" id="validation" name="validation" value="Valider">
    </div6>
</section>
<!-- Fin de la section principale -->
<!-- Début du pied de page -->
<script src="mesFonction.js"></script>
<!-- Fin du pied de page -->
</body>
<footer class="couleurFonce" id="footer">
    <div1 id="orangeBox"></div1>
    <div2 id="blueBox"></div2>
    <div3 id="greyBox"></div3>
    Equipe SNIR - Juillet 2020 - <i>linkedin</i>
</footer>
</html>