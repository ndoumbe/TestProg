
<!DOCTYPE HTML>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="test1.css">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>   
<body>
	<form method="post" action ="connexion.php" name="forme">
	<table class="tab">
	<tr>
		<tr>
			<td>
				<label class="adr">
					Adresse mail ou mobile
				</label>
			</td>
			<td>
				<label class="mot">
					mot de passe
				</label>
			</td>
	</tr>
		<tr>
			<td class="myin">
				<input type="text" required="true"  name="login" placeholder="login"/>
			</td>
			<td>	
				<input type="password" required="true"   name="mdp" placeholder="mot de passe"/>
			</td>
			<td >
				<input class="btn" name="connexion" type="submit" value="Connexion"/>
			</td>
		</tr>
</tr>
</table>


</form>
<form method="post" action ="insc.php" name="myform">


<h1>Créer un Compte</h1>
<h2>c'est gratuit (c'est toujours gratuit)</h2>
<table class="tableau">
<div class="put">
<tr>
			<td>
				<input type="text" name="prenom" required="true" placeholder="Prénom"/>
			</td>
			<td >	
				<input class="lie" type="text" required="true" name="nom" placeholder="Nom de Famille"/>
			</td>
</tr>
</table>
	<input class="oneput" required="true" type="email" name="email" placeholder="Numero de mobile ou  mail"/></br>
	<input class="oneput" required="true"  type="password" name="passe" placeholder="Nouveau mot de passe "/></br>
	<div class="dat">
			Date de Naissance * </div>
	</br>
	<input type="date" name="date" required="true" /></br>
	<input type="radio" name="gender" required="true"
<?php if (isset($gender) && $gender=="F") echo "checked";?>
value="female"/>Femmin
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="M") echo "checked";?>
value="male"/>Homme
</div>

<h6>En cliquant sur Inscription, vous acceptez nos Conditions générales.Découvrez comment nous recueillons,
 utilisons et partageons vos données en lisant notre Politique d’utilisation des données et comment</br>
 nous utilisons les cookies et autres technologies similaires en consultant notre Politique d’utilisation des cookies.
 Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment vous désabonner.
	
</h6>
<input class="button" type="submit" name="button" value="Inscription"/>


</form>


</body>
</html>



	   
	
