<!DOCTYPE html>
<html>
<link  rel="icon" href="img/logo/jik.png">
    <a href="rechercherprodAVANCER.html">  <img  class ="e" src="img/logo/log.jpg" alt="logo" > </a>

<body>
<style type="text/css">
  .e{
height: 80px;
border-radius: 30%;
width:100px;

}
  .monBoutton {
    background-color: #7070ff;
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
include "../core/ProduitsCore.php";
include "../entities/produits.php";
include"../config.php";
if (isset($_GET['char'])) {

    $Produits1C= new ProduitsCore();
    $Produits1=$Produits1C->rechercherAVANCER($_GET['char']);
}
?>
<link type="text/css" rel="stylesheet" href="page.css">
<table id=box1 border="1" align="center"  id="box1">

<tr> 

<td align="center">Nom</td>
<td align="center">Categorie</td>
<td align="center">Qualité</td>
<td align="center">Description</td>
<td align="center">Prix</td>
<td align="center">Quantité</td>
<td align="center">Disponibilité</td>
<td align="center">Image</td>
<td align="center">supprimer</td>
<td align="center">modifier</td>
</tr>
<?PHP
foreach($Produits1 as $row){
  ?>
  <tr>
 
  <td align="center"><?PHP echo $row['nom']; ?></td>
  <td align="center"><?PHP echo $row['marque']; ?></td>
  <td align="center"><?PHP echo $row['qualite']; ?></td>
  <td align="center"><?PHP echo $row['description']; ?></td>
  <td align="center"><?PHP echo $row['prix']; ?></td>
  <td align="center"><?PHP echo $row['quantite']; ?></td>
  <td align="center"><?PHP echo $row['disponibilite']; ?></td>
  <td align="center"class="zoom"><img width="300"
     height="300"src="../core/<?php echo $row['image']; ?>" /></br> 
<td align="center"><form method="POST" 
  action="supprimerProduits.php">
  <input type="submit" name="supprimer" 
  value="supprimer">
  <input type="hidden" value="<?PHP echo $row['idprod']; ?>" name="idprod">
  </form>
  </td>
<div>
  <td align="center"><a href="modifierProduits.php?idprod=
  <?PHP echo $row['idprod']; ?>">
  Modifier</a></td>
  </tr>  </div>
  
  <?PHP
}
?>



</table>

</body>
</html>
<br></br>
 <div align="center"><button class="monBoutton"><div><a href="rechercherprodAVANCER.html"> Retour </a></button><div>