<?php
require_once 'card.php';
require_once '../Configuration.php';

class cardModel {
    
    public function __construct() {
    }
    
    // public function getcard($id)
    // {
    //     $query = "SELECT * FROM card WHERE id_card = ".$id ;
    //     $resultat = mysql_query($query);
    //     $Fa = new card($resultat);
    //     return $Fa;       
    // }
    
    public function addCard($card)
    {
        $bdd = new Db();
        $requete="INSERT INTO card (prenom, nom, cin, sexe, date_naissance, adress, email, statut, photo, inclusion, newsletter, etat) VALUES ('".$card->getprenom()."','".$card->getnom()."','".$card->getcin()."','".$card->getsexe()."','".$card->getdate_naissance()."','".$card->getadress()."','".$card->getemail()."','".$card->getstatut()."','".$card->getphoto()."','".$card->getinclusion()."','".$card->getnewsletter()."',0)";
        echo $requete;
        $bdd->query($requete);
    }
    
    public function activateCard($path, $cin)
    {
        $bdd = new Db();
        $query = "UPDATE card SET card='".$path."' WHERE cin = '".$cin."'";
        $result=$bdd->query($query);
    }    
    
}
