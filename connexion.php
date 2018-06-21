<?php // Include config file
require_once 'config.php';
       if(!empty($_POST['login']))
		$login=trim($_POST['login']);
		else
		echo "il faut remplir les champs";
		if(!empty($_POST['mdp']))
		$mdp=trim($_POST['mdp']);
	   else echo "il faut remplir les champs";
		if(isset($_POST['connexion'] )){
	
		if( !empty($_POST['login']) && !empty($_POST['mdp'])) {
		
		$sql = "select motDePasse, email_mobile from inscription where 
		email_mobile='$login' and motDePasse='$mdp'" ;
		$req = $conn->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

		$row = $req->fetch_assoc();

			if($row['email_mobile'] == $login && $row['motDePasse']==$mdp) {
			echo 'sucesss';
			echo 'Vous etes bien logué';
			}
				
			else {
				echo 'failed';
			} 
			} 
			}




 

?>