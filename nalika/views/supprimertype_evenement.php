<?PHP
include "../core/type_evenementC.php";
$type_evenementC=new type_evenementC();
if (isset($_POST["id_type"])){
	$type_evenementC->supprimertype_evenement($_POST["id_type"]);
	header('Location: affichertype_evenement.php');
}

?>