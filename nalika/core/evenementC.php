<?PHP
include "../config.php";
class evenementC {
function afficherevenement ($evenement){
		echo "id_evenement: ".$evenement->getid_evenement()."<br>";
		echo "nom: ".$evenement->getnom()."<br>";
		echo "date: ".$evenement->getdate()."<br>";
		echo "id_client: ".$evenement->getid_cilent()."<br>";
		echo "nbrmax: ".$evenement->getnbrmax()."<br>";
		echo "id_type: ".$evenement->getid_type()."<br>";
		echo "competition: ".$evenement->getcompetition()."<br>";
		echo "giveaway: ".$evenement->getgiveaway()."<br>";
	}

	function rechercherEvenemment($nom){
		$sql="SELECT * from evenement  WHERE nom='$nom'";
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
		$sql="SELECT * from evenement order by nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





	
	function ajouterevenement($evenement){
		$sql="insert into evenement (id_evenement,nom,date,id_client,nbrmax,id_type,competition,giveaway) values (:id_evenement, :nom,:date,:id_client,:nbrmax,:id_type,:competition,:giveaway)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_evenement=$evenement->getid_evenement();
        $nom=$evenement->getnom();
        $date=$evenement->getdate();
        $id_client=$evenement->getid_client();
        $nbrmax=$evenement->getnbrmax();
        $id_type=$evenement->getid_type();
        $competition=$evenement->getcompetition();
        $giveaway=$evenement->getgiveaway();
		$req->bindValue(':id_evenement',$id_evenement);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nbrmax',$nbrmax);
        $req->bindValue(':id_type',$id_type);
        $req->bindValue(':competition',$competition);
        $req->bindValue(':giveaway',$giveaway);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficherevenements(){
		//$sql="SElECT * From evenement e inner join formationphp.evenement a on e.id_evenement= a.evenement";
		$sql="SElECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerevenement($id_evenement){
		$sql="DELETE FROM evenement where id_evenement= :id_evenement";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_evenement',$id_evenement);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierevenement($evenement,$id_evenement){
		$sql="UPDATE evenement SET id_evenement=:id_evenement, nom=:nom,date=:date,id_client=:id_client,nbrmax=:nbrmax,id_type=:id_type, competition=:competition, giveaway=:giveaway WHERE id_evenement=:id_evenement";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_evenement=$evenement->getid_evenement();
        $nom=$evenement->getnom();
        $date=$evenement->getdate();
        $id_client=$evenement->getid_client();
        $nbrmax=$evenement->getnbrmax();
        $id_type=$evenement->getid_type();
        $competition=$evenement->getcompetition();
        $giveaway=$evenement->getgiveaway();
		$datas = array(':id_evenement'=>$id_evenement, ':id_evenement'=>$id_evenement, ':nom'=>$nom,':date'=>$date,':id_client'=>$id_client,':nbrmax'=>$nbrmax,':id_type'=>$id_type, ':competition'=>$competition,':giveaway'=>$giveaway);
		$req->bindValue(':id_evenementt',$evenementt);
		$req->bindValue(':id_evenement',$id_evenement);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nbrmax',$nbrmax);
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



function recupererevenement($id_evenement){
		$sql="SELECT * from evenement where id_evenement=$id_evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeevenement($tarif){
		$sql="SELECT * from evenement where id_evenement=$id_evenement";
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