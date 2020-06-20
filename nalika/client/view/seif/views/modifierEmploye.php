<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/user.php";
include "../core/userC.php";
if (isset($_GET['Account_ID'])){
	$userC=new userC();
    $result=$userC->recupererUser($_GET['email']);
	foreach($result as $row){
		$email=$row['email'];
		$name=$row['name'];
		$password=$row['password'];
		
?>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?PHP echo $name ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?PHP echo $password ?>"></td>
</tr>
<tr>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="email_ini" value="<?PHP echo $_GET['email'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$employe=new employe($_POST['email'],$_POST['Full_name'],$_POST['password']);
	$employeC->modifierEmploye($employe,$_POST['email_ini']);
	echo $_POST['email_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>