<?PHP
include "../entities/Categorie.php";
include "../core/CategorieCore.php";

if (isset($_POST['idcategorie']) and isset($_POST['marque']) ){
$categorie1=new categorie($_POST['idcategorie'],
$_POST['marque']);
$categorie1C=new CategorieCore();
$categorie1C->ajouterCategorie($categorie1);
header('Location: afficherCategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>
