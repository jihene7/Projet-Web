

<!DOCTYPE html>
<html>

<link  rel="icon" href="img/logo/jik.png">
    <a href="imprimerProduits.html">  <img  class ="e" src="img/logo/log.jpg" alt="logo" href="imprimerProduits.html" > </a>
<body>
<style type="text/css">
   .e{
height: 80px;
border-radius: 30%;
width:100px;

}
.feu { font: bold 2.5em Arial Black, sans-serif;
  text-align: center;
  letter-spacing: 1px
    /* basic font setting */
  color: #cc3700;
  text-shadow: 
               
              
               1px -9px 8px #f7c2f9;
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
    color: white;
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



  border: 3px solid grey ;
 
  transition: box-shadow 0.6s linear,background-color 0.6s linear;
 
  box-shadow: 0px 0px 10px #fff;
 
}
  </style>

<?php
include "../core/ProduitsCore.php";
include "../entities/produits.php";
include"../config.php";
if (isset($_GET['marque'])) {

    $Produits1C= new ProduitsCore();
    $Produitss=$Produits1C->afficherparcategorie($_GET['marque']);
}
?>

  
            <h4 align="center"  class="feu">Ce categorie a pour produits : </h4>

 <link type="text/css" rel="stylesheet" href="page.css">
<table id=box1 border="1" align="center" id="box1">
<tr align="center"> 

<td align="center">Nom</td>
<td align="center">Qualité</td>
<td align="center">Description</td>
<td align="center">Prix</td>
<td align="center">Quantité</td>
<td align="center">Disponibilité</td>
<td align="center">Image</td>

</tr>
<?PHP
foreach($Produitss as $row){
  ?>
  <tr align="center">

 
  <td align="center"><?PHP echo $row['nom']; ?></td>

  <td align="center"><?PHP echo $row['qualite']; ?></td>
  <td align="center"><?PHP echo $row['description']; ?></td>
  <td align="center"><?PHP echo $row['prix']; ?></td>
   <td align="center"><?PHP echo $row['quantite']; ?></td>
  <td align="center"><?PHP echo $row['disponibilite']; ?></td>
  <td align="center" class="zoom"><img width="300"
     height="300" src="../core/<?php echo $row['image']; ?>" /></br> 

  <?PHP
}
?>



</table>
<br></br>
</body>
</html>
 <div align="center"><button class="monBoutton"><div><a href="afficherparcategorie.html"> Retour </a></button><div>
