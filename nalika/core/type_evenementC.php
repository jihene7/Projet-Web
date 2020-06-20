<?PHP
include "../config.php";
class type_evenementC {
function affichertype_evenement ($type_evenement){
		echo "id_type: ".$type_evenement->getid_type()."<br>";
		echo "competition: ".$type_evenement->getcompetition()."<br>";
		echo "giveaway: ".$type_evenement->getgiveaway()."<br>";
	}

	function ajoutertype_evenement($type_evenement){
		$sql="insert into  type_evenement(id_type,competition,giveaway) values (:id_type,:competition,:giveaway)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_type=$type_evenement->getid_type();
        $competition=$type_evenement->getcompetition();
        $giveaway=$type_evenement->getgiveaway();
        $req->bindValue(':id_type',$id_type);
        $req->bindValue(':competition',$competition);
        $req->bindValue(':giveaway',$giveaway);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function affichertype_evenements(){
		//$sql="SElECT * From type_evenement e inner join formationphp.type_evenement a on e.id_type= a.type_evenement";
		$sql="SElECT * From type_evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimertype_evenement($id_type){
		$sql="DELETE FROM type_evenement where id_type= :id_type";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_type',$id_type);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function triType(){
		$sql="SELECT * from type_evenement order by giveaway";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifiertype_evenement($type_evenement,$id_type){
		$sql="UPDATE type_evenement SET id_type=:id_type, competition=:competition, giveaway=:giveaway WHERE id_type=:id_type";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id_type=$type_evenement->getid_type();
        $competition=$type_evenement->getcompetition();
        $giveaway=$type_evenement->getgiveaway();
		$datas = array(':id_type'=>$id_type, ':id_type'=>$id_type, ':competition'=>$competition,':giveaway'=>$giveaway);
		$req->bindValue(':id_type',$id_type);
		$req->bindValue(':competition',$competition);
		$req->bindValue(':giveaway',$giveaway);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
function recuperertype_evenement($id_type){
		$sql="SELECT * from type_evenement where id_type=$id_type";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherchertype($competition){
		$sql="SELECT * from type_evenement  WHERE competition='$competition'";
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