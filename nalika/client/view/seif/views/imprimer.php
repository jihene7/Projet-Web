

	<!DOCTYPE html>
<html>
<link  rel="icon" href="img/logo/jik.png">
    <a href="imprimerCategorie.html">  <img  class ="e" src="img/logo/log.jpg" alt="logo"  > </a>

<body>
<style type="text/css">
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
  body{


 color: #cc3700;
  
 background-image: url("img/logo/122.jpg");
  /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
 

}

          input {
      width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
      }
      input:hover {
      opacity:0.5;}
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




<?PHP
include "../core/userC.php";
$user1C = new userC();
$listeUsers=$user1C->afficherUsers();
//var_dump($listeEmployes->fetchAll());
?> 
<body onload="window.print()">
<table border="1" align="center">
<tr>
<td>Email</td>
<td>Name</td>
<td>Account_Type</td>

</tr>

<?PHP
foreach($listeUsers as $row){
  ?>
  <tr>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['Full_name']; ?></td>
  <td><?PHP echo $row['Account_Type']; ?></td>
  
  </tr>
  <?PHP
}
?>
</table>
