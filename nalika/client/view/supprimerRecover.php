<?PHP
include "../core/userC.php";
$recoverC = new recoverC();
if (isset($_POST["email"])){
	$recoverC->supprimerRecover($_POST["email"]);
	header('Location: afficherRecover.php');
}

?>
<script>
        Javascript:alert('Code Supprime !');
        </script>