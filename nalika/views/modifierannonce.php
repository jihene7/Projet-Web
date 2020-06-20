<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/annonce.php";
include "../core/annonceC.php";
if (isset($_GET['id_annonce'])){
	$annonceC=new annonceC();
    $result=$annonceC->recupererannonce($_GET['id_annonce']);
	foreach($result as $row){
		$id_annonce=$row['id_annonce'];
		$id_offre=$row['id_offre'];
		$id_produit=$row['id_produit'];
		$destination=$row['description'];
		$date_annonce=$row['date_annonce'];
		$date_annonce=$row['date_limite'];
		$id_client=$row['id_client'];

?>
<form method="POST">
<table>
<caption>Modifier annonce</caption>
<tr>
<td>id_annonce</td>
<td><input type="number" name="id_annonce" value="<?PHP echo $id_annonce ?>"></td>
</tr>
<tr>
<td>id_offre</td>
<td><input type="number" name="id_offre" value="<?PHP echo $id_offre ?>"></td>
</tr>
<tr>
<td>id_produit</td>
<td><input type="number" name="id_produit" value="<?PHP echo $id_produit ?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td>date_annonce</td>
<td><input type="text" name="date_annonce" value="<?PHP echo $date_annonce ?>"></td>
</tr>
<tr>
<td>date_limite</td>
<td><input type="text" name="date_limite" value="<?PHP echo $date_limite ?>"></td>
</tr>
<tr>
<td>id_client</td>
<td><input type="number" name="id_client" value="<?PHP echo $id_client ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_annonce_ini" value="<?PHP echo $_GET['id_annonce'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$annonce=new annonce($_POST['id_annonce'],$_POST['id_offre'],$_POST['id_produit'],$_POST['description'],$_POST['date_annonce'],$_POST['date_limite'],$_POST['id_client']);
	$annonceC->modifierannonce($annonce,$_POST['id_annonce_ini']);
	echo $_POST['id_annonce_ini'];
	header('Location: afficherannonce.php');
}
?>
</body>
</HTMl>