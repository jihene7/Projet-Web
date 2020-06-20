<?PHP
include "../entities/offre.php";
include "../core/offreC.php";

if (isset($_POST['id_offre']) and isset($_POST['type_offre'])){
$offre1=new offre($_POST['id_offre'],$_POST['type_offre']);
//Partie2
/*
var_dump($offre1);
}
*/
//Partie3
$offre1C=new offreC();
$offre1C->ajouteroffre($offre1);
header('Location: afficheroffre.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>