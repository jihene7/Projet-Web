<?PHP
class Categorie{
	private $idcategorie;
	private $marque;
	
	function __construct($idcategorie,$marque){
		$this->idcategorie=$idcategorie;
		$this->marque=$marque;
		
	}
	
	function getIdcategorie(){
		return $this->idcategorie;
	}
	function getMarque(){
		return $this->marque;
	}
	

	function setIdcategorie($idcategorie){
		$this->idcategorie=$idcategorie;
	}
	function setMarque($marque){
		$this->marque;
	}
	
	
}

?>