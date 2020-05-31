<!DOCTYPE html>
<link  rel="icon" href="img/logo/jik.png">
<html>

    <a href="rechercherprodAvancer.html">  <img  class ="e" src="img/logo/log.jpg" alt="logo" > </a>

<body>
<style type="text/css">
 
#box1
{



  border: 3px solid grey ;
 
  transition: box-shadow 0.6s linear,background-color 0.6s linear;
 
  box-shadow: 0px 0px 10px #fff;
 
}



  .e{
height: 80px;
border-radius: 30%;
width:100px;

}
  .monBoutton {
    background-color: #7070ff;
  
    font-weight: bold;
    padding: 10px 40px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 8px 16px 0 grey;
    text-decoration: none;
  }
  body {
    color: white;
   background-image: url("img/logo/16.jpg");
 }
          input {
      padding: 15px 100px;
      margin:10px 4px;
      cursor: pointer;
      text-transform: uppercase;
      text-align: center;
      position: relative;
      }
      input:hover {
      opacity:0.5;}




  </style>

<?php
include "../core/CategorieCore.php";
include "../entities/Categorie.php";

if (isset($_GET['char']))  {

    $Categorie1C= new CategorieCore();
    $Categorie1=$Categorie1C->rechercherAVANCER($_GET['char']);
}
?>

<table border="2" align="center" id="box1">
<tr> 

<td align="center">Marque</td>
<td align="center">Supprimer</td>
<td align="center">Modifier</td>
</tr>
  
<?PHP
foreach($Categorie1 as $row){ 
	?>
	<tr>

	<td align="center"><?PHP echo $row['marque']; ?></td>
	<td align="center"><form method="POST" 
	action="supprimerCategorie.php">
	<input type="submit" name="supprimer" 
	value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idcategorie']; ?>" name="idcategorie">
	</form>
	</td>
<div>
	<td><a href="modifierCategorie.php?idcategorie=
	<?PHP echo $row['idcategorie']; ?>">
	Modifier</a></td>
	</tr>  </div>
	<?PHP
}
?>


</table>
</body>
<br></br>
<div align="center"><button class="monBoutton"><div><a href="recherchercategAvancer.html"> Retour </a></button><div>
</html>


