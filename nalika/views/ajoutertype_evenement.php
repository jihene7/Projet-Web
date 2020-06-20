<?PHP
include "../entities/type_evenement.php";
include "../core/type_evenementC.php";

if (isset($_POST['id_type']) and isset($_POST['competition']) and isset($_POST['giveaway'])){
$type_evenement1=new type_evenement($_POST['id_type'],$_POST['competition'],$_POST['giveaway']);
//Partie2
/*
var_dump($type_evenement1);
}
*/
//Partie3
$type_evenement1C=new type_evenementC();
$type_evenement1C->ajoutertype_evenement($type_evenement1);
header('Location: affichertype_evenement.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>