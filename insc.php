<?php 

	if(!empty($_POST['prenom']))
    $prenom=trim($_POST['prenom']);
    if(!empty($_POST['nom']))
	$nom=trim($_POST['nom']);
	if(!empty($_POST['email']))
	$email=trim($_POST['email']);
   if(!empty($_POST['passe']))
	$mdp=trim($_POST['passe']);
    if(!empty($_POST['date']))
	$dat=trim($_POST['date']);
    if(!empty($_POST['gender']))
	$gender=trim($_POST['gender']);
	
	
require_once 'config.php';
if(isset($_POST['button'] )){
 if((isset($prenom)) && !empty($prenom) && (isset($nom) && !empty($nom))&& (isset($dat) && !empty($dat))&& (isset($mdp) && !empty($gender))&& (isset($gender))){
	$sql = "INSERT INTO inscription (id,prenom, nom, email_mobile,reg_date,sexe,motDePasse)
	VALUES ('','$prenom', '$nom', '$email','$dat','$gender','$mdp')";  ?>

	<?php if ($conn->query($sql) === TRUE) { ?>
  
	<div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success</strong> Vous êtes désormais inscrit, il vous suffit de vous connecter !
                </div>
	
	<?php  

}}} ?>