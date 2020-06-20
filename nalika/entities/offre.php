<?PHP
class offre{
	private $id_offre;
	private $type_offre;
	function __construct($id_offre,$type_offre){
		$this->id_offre=$id_offre;
		$this->type_offre=$type_offre;
	}
	
	function getid_offre(){
		return $this->id_offre;
	}
	function gettype_offre(){
		return $this->type_offre;
	}

	function setid_offre($id_offre){
		$this->id_offre=$id_offre;
	}
	function settype_offre($type_offre){
		$this->type_offre=$type_offre;
	}
	
}

?>