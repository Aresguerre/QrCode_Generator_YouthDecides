<?php
	require_once '../model/cardModel.php';
	$cardModel= new cardModel();
	$cardModel->setEtatOne($_GET['cin']);

	header('location:'.$_GET['carte']);
?>