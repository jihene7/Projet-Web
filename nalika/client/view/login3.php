<?php session_start(); ?>



<html> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body style="background:black;">
</body>
</html>
<?php

include "../core/userC.php";
include "../entities/user.php";

$email=$_POST['email'];
$password=$_POST['password'];
$user1C=new userC();
$enc_password=$user1C->findPassword($email);
$name=$user1C->findName($email);
$role=$user1C->FindRole($email);
$Id_user=$user1C->FindID($email);
echo $name;
if(password_verify($password,$enc_password))
{   
    
    if($role=='user')
    {
        $_SESSION['email']=$email;
        $_SESSION['name']=$name;
        $_SESSION['id']=$Id_user;
        $_SESSION['role']=$role;
      header("location:http://localhost/nalika/store/index.html");  

    }
    else 
    {
        $_SESSION['id']=$Id_user; 
        $_SESSION['email']=$email;
        $_SESSION['name']=$name;
        $_SESSION['role']=$role;
         header("location:http://localhost/nalika/views/index.html");
   
    }
    


}




else
{
    echo('<script>swal("Error!", "Wrong Email or password! Try again.", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
    header( "refresh:1.7;url=login.php" );

}



?>