<?php  
          include "../config.php";
    class CategorieCore {
function afficherCategorie ($categorie){
		echo "Identifiant du catégorie: ".$categorie->getIdcategorie()."<br>";
		echo "Marque: ".$categorie->getMarque()."<br>";
		
	}
	function calculerSalaire($categorie){
		echo $categorie->getNbHeures() * $categorie->getTarifHoraire();
	}
	function ajouterCategorie($categorie){
		$sql="insert into categorie (idcategorie,marque) values (:idcategorie, :marque)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idcategorie=$categorie->getIdcategorie();
        $marque=$categorie->getMarque();
       
		$req->bindValue(':idcategorie',$idcategorie);
		$req->bindValue(':marque',$marque);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		$sql="SElECT * From categorie";
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
		$sql="SELECT * from categorie where marque LIKE '$char%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerCategorie($idcategorie){
		$sql="DELETE FROM categorie where idcategorie= :idcategorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcategorie',$idcategorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function recupererCategorie($idcategorie){
		$sql="SELECT * from categorie where idcategorie=$idcategorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierCategorie($categorie,$idcategorie){
		$sql="UPDATE categorie SET idcategorie=:idcategoriee, marque=:marque WHERE idcategorie=:idcategorie";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idcategoriee=$categorie->getIdcategorie();
        $marque=$categorie->getMarque();
        
		$datas = array(':idcategoriee'=>$idcategoriee, ':idcategorie'=>$idcategorie, ':marque'=>$marque);
		$req->bindValue(':idcategoriee',$idcategoriee);
		$req->bindValue(':idcategorie',$idcategorie);
		$req->bindValue(':marque',$marque);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}	
	
function imprimerCategories(){
		$sql="SElECT marque From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}




	function rechercherListeCategorie($marque){
		$sql="SELECT * from categorie  WHERE marque='$marque'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function triMarque(){
		$sql="SELECT * from categorie order by marque";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	function triIdcategorie(){
		$sql="SELECT * from categorie order by idcategorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>











