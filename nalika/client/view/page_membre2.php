
<!DOCTYPE html>
<html>
<head>
	<title> Information Personnel</title>
	<link rel="icon" href= "images/icon/favicon.png">


        <a  > <img  class ="e" src=" images/icon/log.jpg" alt="logo"> </a>
       
        </div>
	<style type="text/css">
	.e{
height: 80px;
border-radius: 30%;
width:100px;

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
   body {
 
    color: white ;
  
  background-image: url("images/4.jpg");
  /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  
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
</head>
<body>



<div align= "center"  >

<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session

{ 


  echo 'Votre email : <b>'.$_SESSION['email'].'</b> <br></br>
   Votre nom est :<b>'.$_SESSION['name'].
  '</b>
  <br></br>Votre role est : <b>'.$_SESSION['role'].' </b><br></br>
   Identifiant de la session est :<b>'.session_id().'</b></br>'; 
	 
	
 
}


//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>
</body>
<br></br>
<div align="center"><button class="monBoutton"><div><a href="http://localhost/nalika/store/index.html"> Retour </a></button><div>
</html>