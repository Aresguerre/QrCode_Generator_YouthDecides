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
        $requete="INSERT INTO card (prenom, nom, cin, sexe, date_naissance, adress, email, statut, photo, inclusion, newsletter) VALUES ('".$card->getprenom()."','".$card->getnom()."','".$card->getcin()."','".$card->getsexe()."','".$card->getdate_naissance()."','".$card->getadress()."','".$card->getemail()."','".$card->getstatut()."','".$card->getphoto()."','".$card->getinclusion()."','".$card->getnewsletter()."')";
        echo $requete;
        $bdd->query($requete);
    }
    
    // public function deletecard($card)
    //       {
    //         $bdd = new Db();
    //         $query = "DELETE FROM card WHERE id_produit = ".$card->getid_produit()." AND id_user = ".$card->getid_user();
    //         $result=$bdd->query($query);
    //       }    

    // public function card_slider()
    // {
    //     $fav = array();
    //     $bdd = new Db();
    //     $query = "SELECT id_produit FROM card GROUP by id_produit ORDER BY count(id_produit) DESC";
    //     $resultat = $bdd->query($query);

           
    //         while ($data = $resultat -> fetch_assoc()) {
    //             array_push($fav, $data);
                
    //         }
    //         return $fav;
    // }  
            
    
}
