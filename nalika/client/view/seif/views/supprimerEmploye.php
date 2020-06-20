<?PHP
include "../core/userC.php";
$userC = new userC();
if (isset($_POST["email"])){
	$userC->supprimerUser($_POST["email"]);
	header('Location: afficherEmploye.php');
}
