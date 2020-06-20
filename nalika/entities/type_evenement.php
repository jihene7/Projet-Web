<?PHP
class type_evenement{
	private $id_type;
	private $competition;
	private $giveaway;

	function __construct($id_type,$competition,$giveaway){
		$this->id_type=$id_type;
		$this->competition=$competition;
		$this->giveaway=$giveaway;
	}
	
	function getid_type(){
		return $this->id_type;
	}
	function getcompetition(){
		return $this->competition;
	}
	function getgiveaway(){
		return $this->giveaway;
	}

	function setid_type($id_type){
		$this->id_type=$id_type;
	}
	function setcompetition($competition){
		$this->competition=$competition;
	}
	function setgiveaway($giveaway){
		$this->giveaway=$giveaway;
	}

}

?>