<?php 
	if(isset($_GET["deconnexion"])){											//Début du code permettant une deconnexion propre
		foreach ($_COOKIE as $cookie_name => $cookie_value){					//Dans cette boucle on supprime 1 a un les cookies existant dans un premiers
			setCookie($cookie_name,"",time());									//temps en supprimant leur durée de vie puis en les effaçant des cookies listés dans $_COOKIE.
			unset($_COOKIE[$cookie_name]);
		}
		setcookie("pseudo", "guest", time() + 60*60, null, null, false, true);	//je laisse le ce cookie car je le donne a tout les invité pour retenir que ce sont des sans compte.
		header("monCV.php");													//il ne faut pas oublier de quitter la page pour revenir a l'Index.
		exit();
	}

	if(isset($_GET("profil"))){
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); //la je suis sensé dire au serveur sql dans quel base de donné chercher sa valeur
	$reponse = $mysqli->query("SELECT nom, prenom, adresse, pseudo FROM utilisateur WHERE pseudo='"."$_COOKIE['pseudo']"."'"); //pourquoi 3 string ou on peut en  faire 1 car ya trop de ' et le reste du programe comprends pas trop, cette ligne récupère lees donnés dans la bdd utilisateur en fonction du cookie
		while ($donnees = $reponse->fetch()){
			echo("Le Nom est :".$donnees["nom"]);
			echo("Le prenom est :".$donnees["prenom"]);
			echo("Le Email est :".$donnees["adresse"]);
			echo("Le Pseudo est :".$donnees["pseudo"]);
		}//ecrire la boucle pour créer les différents cookies via les variables précedement crées (possibilité de le faire en 1 boucle cette tache + précedente)
		header("monCV.php");													//il ne faut pas oublier de quitter la page pour revenir a l'Index.
		exit();
	}
?>