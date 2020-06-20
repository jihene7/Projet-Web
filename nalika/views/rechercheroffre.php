

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
include "../core/offreC.php";
include "../entities/offre.php";
 
if (isset($_GET['type_offre'])) {
 $offre1C=new offreC();
$listeoffres=$offre1C->rechercheroffre($_GET['type_offre']);

}

?>
<table border="1">
<tr>
<td>id_offre</td>
<td>type_offre</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeoffres as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id_offre']; ?></td>
  <td><?PHP echo $row['type_offre']; ?></td>
  <td><form method="POST" action="supprimeroffre.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id_offre']; ?>" name="id_offre">
  </form>
  </td>
  <td><a href="modifieroffre.php?id_offre=<?PHP echo $row['id_offre']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>





</body>
<br></br>
  <div align="center"><button class="monBoutton"><div><a href="rechercheroffre.html"> Retour </a></button><div>
</html>


