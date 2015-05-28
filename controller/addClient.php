<?php
	require_once '../model/cardModel.php';
	$card= new card();
	$cardModel= new cardModel();

	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$cin=$_POST['cin'];
	$sexe=$_POST['sexe'];
	$date_naissance=$_POST['date_naissance'];
	// $adress
	$email=$_POST['email'];
	$photo=$_POST['photo'];
	$inclusion=$_POST['inclusion'];
	$newsletter=$_POST['newsletter'];
	// set card
	$cardModel->addCard($card);

?>