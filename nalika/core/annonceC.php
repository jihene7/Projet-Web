<?PHP
include "../config.php";
class annonceC {
function afficherannonce ($annonce){
		echo "id_annonce: ".$annonce->getid_annonce()."<br>";
		echo "id_offre: ".$annonce->getid_offre()."<br>";
		echo "id_produit: ".$annonce->getid_produit()."<br>";
		echo "description: ".$annonce->getdescription()."<br>";
		echo "date_annonce: ".$annonce->getdate_annonce()."<br>";
		echo "date_limite: ".$annonce->getdate_limite()."<br>";
		echo "id_client: ".$annonce->getid_client()."<br>";
	}

	function rechercherAnnonce($description){
		$sql="SELECT * from annonce  WHERE description='$description'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function tri(){
		$sql="SELECT * from annonce order by description";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





	
	function ajouterannonce($annonce){
		$sql="insert into annonce (id_annonce,id_offre,id_produit,description,date_annonce,date_limite,id_client) values (:id_annonce, :id_offre,:id_produit,:description,:date_annonce,:date_limite,:id_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_annonce=$annonce->getid_annonce();
        $id_offre=$annonce->getid_offre();
        $id_produit=$annonce->getid_produit();
        $description=$annonce->getdescription();
        $date_annonce=$annonce->getdate_annonce();
        $date_limite=$annonce->getdate_limite();
        $id_client=$annonce->getid_client();
		$req->bindValue(':id_annonce',$id_annonce);
		$req->bindValue(':id_offre',$id_offre);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_annonce',$date_annonce);
		$req->bindValue(':date_limite',$date_limite);
		$req->bindValue(':id_client',$id_client);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		}
			function afficherannonces(){
		//$sql="SElECT * From evenement e inner join formationphp.evenement a on e.id_evenement= a.evenement";
		$sql="SElECT * From annonce";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerannonce($id_annonce){
		$sql="DELETE FROM annonce where id_annonce= :id_annonce";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_annonce',$id_annonce);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierannonce($annonce,$id_annonce){
		$sql="UPDATE annonce SET id_annonce=:id_annonce, id_offre=:id_offre,id_produit=:id_produit,description=:description,date_annonce=:date_annonce,date_limite=:date_limite,id_client=:id_client, WHERE id_annonce=:id_annonce";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
         $req=$db->prepare($sql);
		$id_annonce=$annonce->getid_annonce();
		$id_offre=$annonce->getid_offre();
		$id_produit=$annonce->getid_produit();
        $description=$annonce->getdescription();
        $date_annonce=$annonce->getdate_annonce();
        $date_limite=$annonce->getdate_limite();
        $id_client=$annonce->getid_client();
		$datas = array(':id_annonce'=>$id_annonce, ':id_annonce'=>$id_annonce, ':id_offre'=>$id_offre, ':id_produit'=>$id_produit, ':description'=>$description,':date_annonce'=>$date_annonce,':date_limite'=>$date_limite,':id_client'=>$id_client);
		$req->bindValue(':id_annonce',$id_annonce);
		$req->bindValue(':id_annonce',$id_annonce);
		$req->bindValue(':id_offre',$id_offre);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_annonce',$date_annonce);
		$req->bindValue(':date_limite',$date_limite);
		$req->bindValue(':id_client',$id_client);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}



function recupererannonce($id_annonce){
		$sql="SELECT * from annonce where id_annonce=$id_annonce";
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