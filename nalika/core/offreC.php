<?PHP
include "../config.php";
class offreC {
function afficheroffre($offre){
		echo "id_offre: ".$offre->getid_offre()."<br>";
		echo "type_offre: ".$offre->gettype_offre()."<br>";
	}

	function ajouteroffre($offre){
		$sql="insert into offre (id_offre,type_offre) values (:id_offre,:type_offre)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_offre=$offre->getid_offre();
        $type_offre=$offre->gettype_offre();
		$req->bindValue(':id_offre',$id_offre);
		$req->bindValue(':type_offre',$type_offre);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficheroffres(){
		//$sql="SElECT * From annonce e inner join formationphp.annonce a on e.id_annonce= a.annonce";
		$sql="SElECT * From offre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeroffre($id_offre){
		$sql="DELETE FROM offre where id_offre= :id_offre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_offre',$id_offre);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercheroffre($type_offre){
		$sql="SELECT * from offre  WHERE type_offre='$type_offre'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function trioff(){
		$sql="SELECT * from offre order by type_offre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifieroffre($offre,$id_offre){
		$sql="UPDATE offre SET  id_offre=:id_offre,type_offre=:type_offre, WHERE id_offre=:id_offre";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_offree=$offre->getid_offre();
		$type_offre=$offre->gettype_offre();
		$datas = array(':id_offre'=>$id_offre, ':type_offre'=>$typeoffre);
		$req->bindValue(':id_offre',$id_offre);
		
		$req->bindValue(':type_offre',$type_offre);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
function recupereroffre($id_offre){
		$sql="SELECT * from offre where id_offre=$id_offre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeoffre($tarif){
		$sql="SELECT * from offre where id_offre=$id_offre";
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