<!DOCTYPE html>
<link  rel="icon" href="img/logo/jik.png">
    <a href="imprimerProduits.html">  <img  class ="e" src="img/logo/log.jpg" alt="logo" href="imprimerProduits.html" > </a>
<html>
 
<style type="text/css">
.e{
height: 80px;
border-radius: 30%;
width:100px;

}

.feu { font: bold 3em Impact, sans-serif;
  text-align: center;
  letter-spacing: 1px
    /* basic font setting */
  color: #cc3700;
  text-shadow: 
               
              
               1px -9px 8px #364e95;
}
#box1
{



  border: 3px solid grey ;
 
  transition: box-shadow 0.6s linear,background-color 0.6s linear;
 
  box-shadow: 0px 0px 10px #fff;
 
}
body{


  
  
background-color: #006fbe;
 

}

.monBoutton {
    background-color: #007BFF;
    Color:white;
    font-weight: bold;
    padding: 10px 40px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 8px 16px 0 grey;
    text-decoration: none;
  }
</style>
<?php
  //require 'connect.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=gestion produits', 'root', '');
  $pdoStat = $objectPdo->prepare('SElECT idprod,nom,marque,qualite,description,prix,quantite,disponibilite,image From produits inner join categorie on produits.idcategorie=categorie.idcategorie  ORDER BY idprod ASC ');
  $executeIsOK = $pdoStat->execute();
  $listeProduits= $pdoStat->fetchAll();

 ?>


<body onload="window.print()">
<h3 align="center" class="feu">Liste produits</h4>
                      
<table border="1" align="center" id="box1">
<tr> 

<td  align="center">Nom</td>
<td  align="center">Categorie</td>
<td  align="center">Qualité</td>
<td  align="center">Description</td>
<td  align="center">Prix</td>
<td  align="center">Quantité</td>
<td  align="center">Disponibilité</td>
<td  align="center">Image</td>

</tr>
<?PHP
foreach($listeProduits as $listeProduits){
  ?>
  <tr>

  <td  align="center"><?PHP echo $listeProduits['nom']; ?></td>
  <td  align="center"><?PHP echo $listeProduits['marque']; ?></td>
  <td  align="center"><?PHP echo $listeProduits['qualite']; ?></td>
  <td  align="center"><?PHP echo $listeProduits['description']; ?></td>
  <td  align="center"><?PHP echo $listeProduits['prix']; ?></td>
   <td  align="center"><?PHP echo $listeProduits['quantite']; ?></td>
  <td  align="center"><?PHP echo $listeProduits['disponibilite']; ?></td>
  <td class="zoom" width="200"
     height="200"><img width="200"
     height="200"src="../core/<?php echo $listeProduits['image']; ?>" /></br> 

  
  <?PHP
}
?>



</table>

</body>

</html>
<br>
</br>

