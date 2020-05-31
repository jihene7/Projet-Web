<?PHP
include "../core/CategorieCore.php";

$categorieC=new CategorieCore();
if (isset($_POST["idcategorie"])) {
	$categorieC-> supprimerCategorie($_POST["idcategorie"]);
	header('Location: afficherCategorie.php');
}

?>