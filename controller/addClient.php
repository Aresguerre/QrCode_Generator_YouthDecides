<?php
	require_once '../model/cardModel.php';
	$card= new card();
	$cardModel= new cardModel();

	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$cin=$_POST['cin'];
	$sexe=$_POST['sexe'];
	$date_naissance=$_POST['date_naissance'];
	$adress=$_POST['adresse'].' '.$_POST['zipcode'].' '.$_POST['ville'];
	$email=$_POST['email'];
	$sourcePath=$_FILES['photo']['tmp_name'];
	$targetPath="../view/images/Resources/photo/".$_FILES['photo']['name'];
	move_uploaded_file($sourcePath, $targetPath);
	$inclusion=$_POST['inclusion'];
	$newsletter=$_POST['newsletter'];
	$card->setprenom($prenom);
	$card->setnom($nom);
	$card->setcin($cin);
	$card->setsexe($sexe)
	$card->setdate_naissance($date_naissance);
	$card->setadress($adress);
	$card->setemail($email);
	$card->setphoto($targetPath);
	$card->setinclusion($inclusion);
	$card->setnewsletter($newsletter);

	$cardModel->addCard($card);

	header('location:qrgen.php?prenom='.$prenom.'&nom='.$nom.'&cin='.$cin.'&sexe='.$sexe.'&date_naissance='.$date_naissance.'&adresse='.$adress.'&email='.$email);

?>