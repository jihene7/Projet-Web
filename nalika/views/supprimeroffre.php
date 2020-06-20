<?PHP
include "../core/offreC.php";
$offreC=new offreC();
if (isset($_POST["id_offre"])){
	$offreC->supprimeroffre($_POST["id_offre"]);
	header('Location: afficheroffre.php');
}

?>