

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





  </style>

<?php
include "../core/evenementC.php";
include "../entities/evenement.php";
 
if (isset($_GET['nom'])) {
 
    $evennements1C= new evenementC();
    $event1=$evennements1C->rechercherEvenemment($_GET['nom']);

}

?>

<table border="2" align="center" >
<tr> 

<td align="center">id_evenement</td>
<td align="center">nom</td>
<td align="center">date</td>
<td align="center">id_client</td>
<td align="center">nbrmax</td>
<td align="center">id_type</td>
<td align="center">competition</td>
<td align="center">giveaway</td>
<td align="center">supprimer</td>
<td align="center">modifier</td>
</tr>
  
<?PHP
foreach($event1 as $row){ 
	?>
	<tr>

	<td><?PHP echo $row['id_evenement']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['id_client']; ?></td>
  <td><?PHP echo $row['nbrmax']; ?></td>
  <td><?PHP echo $row['id_type']; ?></td>
  <td><?PHP echo $row['competition']; ?></td>
  <td><?PHP echo $row['giveaway']; ?></td>
  <td><form method="POST" action="supprimerevenement.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['id_evenement']; ?>" name="id_evenement">
  </form>
  </td>
  <td><a href="modifierevenement.php?id_evenement=<?PHP echo $row['id_evenement']; ?>">
  Modifier</a></td>
	</tr>  </div>

	<?PHP

}

?>


</table>
</body>
<br></br>
  <div align="center"><button class="monBoutton"><div><a href="rechercherListeEvennements.html"> Retour </a></button><div>
</html>


