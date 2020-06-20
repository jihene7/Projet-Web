

<!DOCTYPE html>
<html>
<link rel="icon" href="images/log.png">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" ><img  class ="e" src="images/log.jpg" alt="logo"> </a>
       
        </div>
        
<style type="text/css">
.e{
height: 80px;
border-radius: 30%;
width:100px;

}
  body {
   color: #cc3700;
  
  background-image: url("images/122.jpg");
  /* You must set a specified height */
  background-position: center; /* Center the image */
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
      <style type="text/css">

 
 #box1
{
 
  



}
#box1
{ color: #cc3700;
  transition: box-shadow 0.6s linear,background-color 0.6s linear;
  
  box-shadow: 0px 0px 10px #fff;
width: 50%;
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
  .f{

    font-size: 1.3rem;
  }

    </style>

  </style>
  

<?php
include "../core/ProduitsCore.php";
include "../entities/produits.php";
include"../config.php";
if (isset($_GET['nom'])) {

    $Produits1C= new ProduitsCore();
    $Produits1=$Produits1C->rechercherListeProduits($_GET['nom']);
}
?>
<?PHP
foreach($Produits1 as $row){
  ?>
 
 
    <section class="ftco-section">
      <div class="container" align="center">
        
                
<div id="box1" align="center">
  <body>
  
               
               <hr  align="center">
               <p  align="center">
               <h4  align="center">
                <dl >
                <dd><b class="f" >Nom du produits:</b> <i ><?PHP echo $row['nom']; ?> </i></dd> 
               <dd><b class="f"> Marque :</b> <i> <?PHP echo $row['marque']; ?></i></dd>
                <dd><b class="f">Qualité :</b> <i> <?PHP echo $row['qualite']; ?></i></dd>
                 <dd><b class="f">Description :</b> <i> <?PHP echo $row['description']; ?></i></dd>
                  <dd><b class="f">Qualité :</b> <i> <?PHP echo $row['prix']; ?></i></dd>
                  <dd><b class="f">Quantité :</b> <i> <?PHP echo $row['quantite']; ?></i></dd>
                  <dd><b class="f">Disponibilité :</b> <i> <?PHP echo $row['disponibilite']; ?></i></dd>
                   <dd><i> <img width="300"
     height="300"src="../core/<?php echo $row['image']; ?>" /></i></dd>
     <br></br>
      <br></br>
                  
                  </dl>
                      
            

                         </h4>
                </p>


</div>





  <?PHP
}
?>

 <div align="center"><button class="monBoutton"><div><a href="afficherProduits2.php"> Retour </a></button><div>