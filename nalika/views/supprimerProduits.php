<?PHP
include "../Core/ProduitsCore.php";
include "../config.php";
$produits1C=new ProduitsCore();
if (isset($_POST["idprod"])) {
	$produits1C-> supprimerProduits($_POST["idprod"]);
	header('Location: afficherProduits.php');
}

?>
