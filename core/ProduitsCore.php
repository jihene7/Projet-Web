<?php  
       
   
    class ProduitsCore {
function afficherproduit ($produits){
		echo "Identifiant du produit: ".$produits->getIdprod()."<br>";
		echo "Nom: ".$produits->getNom()."<br>";
		echo "Identifiant du catégorie: ".$produits->getIdcategorie()."<br>";
		echo "Qualité: ".$produits->getQualite()."<br>";
		echo "Description: ".$produits->getDescription()."<br>";
		echo "Prix: ".$produits->getPrix()."<br>";
		echo "Quantité: ".$produits->getQuantite()."<br>";
		echo "Disponibilité: ".$produits->getDisponibilite()."<br>";
		echo "image: ".$produits->getImage()."<br>";
	}
	/*function calculerSalaire($categorie){
		echo $categorie->getNbHeures() * $categorie->getTarifHoraire();
	}*/
	function ajouterProduits($produits){
		$sql="insert into produits (idprod,nom,idcategorie,qualite,description,prix,quantite,disponibilite,image) values (:idprod,:nom,:idcategorie,:qualite,:description,:prix,:quantite,:disponibilite,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		 $idprod=$produits->getIdprod();
          $nom=$produits->getNom();
           $idcategorie=$produits->getIdcategorie();
          $qualite=$produits->getQualite();
          $description=$produits->getDescription();
         $prix=$produits->getPrix();
                  
                  $quantite=$produits->getQuantite();
                    $disponibilite=$produits->getDisponibilite();
                    $image=$produits->getImage();
        $req->bindValue(':idprod',$idprod);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idcategorie',$idcategorie);
		$req->bindValue(':qualite',$qualite);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':image',$image);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function afficherProduits(){
		$sql="SElECT idprod,nom,marque,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ListeProduits(){
		$sql="SElECT nom,marque,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerProduits($idprod){
		$sql="DELETE FROM produits where idprod= :idprod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idprod',$idprod);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


//////////////////////////////////////////////////////////


	function afficherparcategorie($marque){
		$sql="SElECT marque,nom,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie where marque='$marque'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function recupererProduits($idprod){
		$sql="SELECT * from produits where idprod=$idprod";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	////////////////////////////////////////////


function rechercherListeProduits($nom){
		$sql="SElECT idprod,nom,marque,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie where nom='$nom'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherAVANCER($char){
		$sql=" SElECT idprod,nom,marque,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie where nom LIKE '$char%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function triNom(){
		$sql="SElECT idprod,nom,marque,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie order by nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function triPrix(){
		$sql="SElECT idprod,nom,marque,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie order by prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	
	

	//////////////////////////


	function modifierProduits($idprod,$nom,$qualite,$description,$prix,$quantite,$disponibilite,$image){
		$sql="UPDATE produits SET idprod='$idprod',nom='$nom',qualite='$qualite',description='$description',prix='$prix',quantite='$quantite',disponibilite='$disponibilite',image='$image' WHERE idprod='$idprod'";
		
		$db = config::getConnexion();
		try{
				$db->query($sql);
				
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	}






	
?>

