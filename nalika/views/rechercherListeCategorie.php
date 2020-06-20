

<!DOCTYPE html>
<html>
<link  rel="icon" href="img/logo/jik.png">
    <a href="rechercherListeCategorie.html">  <img  class ="e" src="img/logo/log.jpg" alt="logo"  > </a>

<body>

<style type="text/css">
  .feu { font: bold 2.5em Arial Black, sans-serif;
  text-align: center;
  letter-spacing: 1px
    /* basic font setting */
  color: #cc3700;
  text-shadow: 
               
              
               1px -9px 8px #f7c2f9;
}
  .e{
height: 80px;
border-radius: 30%;
width:100px;

}
  .monBoutton {
    background-color: #9e00be;
    Color:white;
    font-weight: bold;
    padding: 10px 40px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 8px 16px 0 grey;
    text-decoration: none;
  }
  body {
    color: purple;
    background-image: url("img/logo/5.jpg");
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


#box1
{


  background-color: rgba(255,255,255,0.6);
  border: 3px solid grey ;
 
  
 
}
#box1:hover
{
  transition: box-shadow 0.6s linear,background-color 0.6s linear;
  background: rgba(255,255,255,0.9);
  box-shadow: 0px 0px 10px #fff;
}



  </style>

<?php
include "../core/CategorieCore.php";
include "../entities/Categorie.php";
 
if (isset($_GET['marque'])) {
 
    $Categorie1C= new CategorieCore();
    $Categorie1=$Categorie1C->rechercherListeCategorie($_GET['marque']);

}

?>

<table border="2" align="center" id="box1">
<tr> 

<td align="center">Marque</td>
<td align="center">supprimer</td>
<td align="center">modifier</td>
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
	<td align="center"><a href="modifierCategorie.php?idcategorie=
	<?PHP echo $row['idcategorie']; ?>">
	Modifier</a></td>
	</tr>  </div>

	<?PHP

}

?>


</table>
</body>
<br></br>
  <div align="center"><button class="monBoutton"><div><a href="rechercherListeCategorie.html"> Retour </a></button><div>
</html>


