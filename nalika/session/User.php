<?php 
include 'dbconfig.php';
class User{
	private $login;
    private $pwd;
	private $role;
	private $email;
		private $joining_date;
    public $conn;	

	public function __construct($email,$pwd,$conn)
	{
		$this->email=$email;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getdate()
	{
		return $this->joining_date;
	}
	function getLog()
	{
		return $this->login;
	}
	function getEmail()
	{
		return $this->email;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$email,$pwd)
	{
		$req="select * from users where user_email='$email' && user_pass='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>