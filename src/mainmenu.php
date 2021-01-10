	
	<link rel="stylesheet" href="css/styles2.css" type="text/css" media="all" />

		<div class="bg-imgg">

		 
		</div>

		<div class="ian">
			 <form action="/action_page.php" class="containerr">
		    <h1>Inscription</h1>

		    <label for="username"><b>Username</b></label>
		    <input type="text" placeholder="Enter username" name="username" required>

		    <label for="email"><b>Email</b></label>
		    <input type="text" placeholder="Enter Email" name="email" required>

		    <label for="psw"><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" required>

		    <label for="psw"><b>Repeat Password</b></label>
		    <input type="password" placeholder="Repeat Password" name="psw" required>

		    <button  href="http://proJerico/welcom..php" type="submit" class="btnn">Enregistrer 
		    </a></button>
		  </form>
		</div>


	<?php
		include("connect.php");
		$idcom=connexpdo('nimifacebook','myparam');
		if(!empty($_POST['username'])&& !empty($_POST['email'])&& !empty($_POST['password'])&& !empty($_POST['repeatpassword']))
		{
		$id_user="\N";
		$username=$idcom->quote($_POST['username']);
		$mail=$idcom->quote($_POST['email']);
		$password=$idcom->quote($_POST['password']);
		$repeatpassword=$idcom->quote($_POST['repeatpassword']);  


		// Requête SQL
		$requete="INSERT INTO utilisater
		VALUES($id_user,$username,$mail,$password,$repeatpassword)"; // pas de guillemets si on applique la méthode quote aux variables

		$nblignes=$idcom->exec($requete); 
		if($nblignes!=1) 
		{
		$mess_erreur=$idcom->errorInfo();
		echo "Insertion impossible, code", $idcom->errorCode(),$mess_erreur[2];
		echo "<script type=\"text/javascript\">
		alert('Erreur : ".$idcom->errorCode()."')</script>";
		}
		else
		{
		echo "<script type=\"text/javascript\">
		alert('Vous êtes enregistré. Votre numéro de client est :
		". $idcom->lastInsertId()."')</script>"; 
		$idcom=null;
		}
		}
		else {echo "<h3>Formulaire à compléter !</h3>";}
    ?>

		  <br/><br/>

 
