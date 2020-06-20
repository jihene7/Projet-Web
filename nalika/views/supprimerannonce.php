<?PHP
include "../core/annonceC.php";
$annonceC=new annonceC();
if (isset($_POST["id_annonce"])){
	$annonceC->supprimerannonce($_POST["id_annonce"]);
	header('Location: afficherannonce.php');
}

?>