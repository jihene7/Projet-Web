

                                                                
                                                                                   <!doctype html>
<html class="no-js" lang="en">

<?PHP
include "../core/evenementC.php";
$evennementC=new evenementC();

$listeEvennements=$evennementC->triNom();

?>

<head>
 
    <title>Trier les evennements</title>
      


 
            <h4 align="center"  class="feu">Trie des evenements</h4>


    
<style type="text/css">
    .feu { font: bold 2.5em Arial Black, sans-serif;
  text-align: center;
  letter-spacing: 1px
    /* basic font setting */
  color: #cc3700;
  text-shadow: 
               
              
               1px -9px 8px #f7c2f9;
} 



  body {
    color: black;
   
   
  /* You must set a specified height */
  
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */

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
<link type="text/css" rel="stylesheet" href="page.css">

<table id="box1" border="2" align="center">
<tr> 

<td align="center">id_evenement</td>
<td  align="center">nom</td>
<td  align="center">date</td>
<td  align="center">id_client</td>
<td  align="center">nbrmax</td>
<td  align="center">id_type</td>
<td  align="center">competition</td>
<td  align="center">giveaway</td>
<td   align="center">supprimer</td>
<td   align="center">modifier</td>
</tr>

<?PHP
foreach($listeEvennements as $row){
    ?>
    <tr   align="center">
<td  align="center"><?PHP echo $row['id_evenement']; ?></td>
    <td  align="center"><?PHP echo $row['nom']; ?></td>
    <td  align="center"><?PHP echo $row['date']; ?></td>
    <td  align="center"><?PHP echo $row['id_client']; ?></td>
    <td  align="center"><?PHP echo $row['nbrmax']; ?></td>
    <td  align="center"><?PHP echo $row['id_type']; ?></td>
    <td  align="center"><?PHP echo $row['competition']; ?></td>
    <td  align="center"><?PHP echo $row['giveaway']; ?></td>
    <td  align="center"><form method="POST" action="supprimerevenement.php">
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
</html>

<div>



</div>



