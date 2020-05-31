

<!DOCTYPE html>
<html>

<link rel="icon" href="images/logo.png">
<body>
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
width: 45%;
 position: relative; 
   top: 20px; 
   left: 20px; 
 
color: #cc3700;
  transition: box-shadow 0.6s linear,background-color 0.6s linear;
  
  box-shadow: 0px 0px 10px #fff;

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
  .feu { font: bold 3em Impact, sans-serif;
  text-align: center;
  letter-spacing: 1px
    /* basic font setting */
  color: #cc3700;
  text-shadow: 
               
              
               1px -9px 8px #364e95;
}

 </style>

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
 <h3 align="center"  class="feu"> Cettte  marque  a pour produits:</h3> 
<?PHP

foreach($Produitss as $row){
  ?>

  
    <section class="ftco-section" align="center">
  
                
      <div class="container" align="center">
   
<div id="box1" align="center">
  
      
               
               <hr  align="center">
               <p  align="center">
               <h4  align="center">
                <dl   >
                <dd><b>Nom du produits:</b> <i><?PHP echo $row['nom']; ?> </i></dd> 
              
                <dd><b>Qualité :</b><i> <?PHP echo $row['qualite']; ?></i></dd>
                 <dd><b>Description :</b><i> <?PHP echo $row['description']; ?></i></dd>
                  <dd><b>Prix :</b><i> <?PHP echo $row['prix']; ?></i></dd>
                  <dd><b>Quantité :</b><i> <?PHP echo $row['quantite']; ?></i></dd>
                  <dd><b>Disponibilité :</b><i> <?PHP echo $row['disponibilite']; ?></i></dd>
                   <dd><i> <img width="300"
     height="300"src="../core/<?php echo $row['image']; ?>" /></i></dd>
    
                  
                  </dl>
                      
            

                         </h4>
                </p>


</div>


 <br></br>


  <?PHP
}
?>
</body>

<br></br>
</html>

 <div align="center"><button class="monBoutton"><div><a href="afficherProduits2.php"> Retour </a></button><div>