

<!DOCTYPE html>
<html>


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
    background color:#ff9f95;
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
include "../core/annonceC.php";
include "../entities/annonce.php";
 
if (isset($_GET['description'])) {
 
    $annonce1C= new annonceC();
    $liste1=$annonce1C->rechercherAnnonce($_GET['description']);

}

?>

<table border="1">
<tr>
<td>id_annonce</td>
<td>id_offre</td>
<td>id_produit</td>
<td>description</td>
<td>date_annonce</td>
<td>date_limite</td>
<td>id_client</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($liste1 as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id_annonce']; ?></td>
  <td><?PHP echo $row['id_offre']; ?></td>
  <td><?PHP echo $row['id_produit']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['date_annonce']; ?></td>
  <td><?PHP echo $row['date_limite']; ?></td>
  <td><?PHP echo $row['id_client']; ?></td>
  <td><form method="POST" action="supprimerannonce.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id_annonce']; ?>" name="id_annonce">
  </form>
  </td>
  <td><a href="modifierannonce.php?id_annonce=<?PHP echo $row['id_annonce']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>



</table>
</body>
<br></br>
  <div align="center"><button class="monBoutton"><div><a href="rechercherannonce.html"> Retour </a></button><div>
</html>


