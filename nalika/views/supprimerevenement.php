<?PHP
include "../core/evenementC.php";
$evenementC=new evenementC();
if (isset($_POST["id_evenement"])){
	$evenementC->supprimerevenement($_POST["id_evenement"]);
	header('Location: afficherevenement.php');
}

?>