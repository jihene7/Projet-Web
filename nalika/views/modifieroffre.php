<HTML>
<head>
</head>
<body>

<?PHP
include "../entities/offre.php";
include "../core/offreC.php";
if (isset($_GET['id_offre'])){
	$offreC=new offreC();
    $result=$offreC->recupereroffre($_GET['id_offre']);
	foreach($result as $row){
		$id_offre=$row['id_offre'];
		$type_offre=$row['type_offre'];
?>
<form method="POST">
<table>
<caption>Modifier offre</caption>
<tr>
<td>id_offre</td>
<td><input type="number" name="id_offre" value="<?PHP echo $id_offre ?>"></td>
</tr>
<tr>
<td>type_offre</td>
<td><input type="text" name="type_offre" value="<?PHP echo $type_offre ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_offre_ini" value="<?PHP echo $_GET['id_offre'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$offre=new offre($_POST['id_offre'],$_POST['type_offre']);
	$offreC->modifieroffre($offre,$_POST['id_offre_ini']);
	echo $_POST['id_offre_ini'];
	header('Location: afficheroffre.php');
}
?>
</body>
</HTMl>
