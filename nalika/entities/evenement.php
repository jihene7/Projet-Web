<?PHP
class evenement{
	private $id_evenement;
	private $nom;
	private $date;
	private $id_client;
	private $nbrmax;
	private $id_type;
	private $competition;
	private $giveaway;

	function __construct($id_evenement,$nom,$date,$id_client,$nbrmax,$id_type,$competition,$giveaway){
		$this->id_evenement=$id_evenement;
		$this->nom=$nom;
		$this->date=$date;
		$this->id_client=$id_client;
		$this->nbrmax=$nbrmax;
		$this->id_type=$id_type;
		$this->competition=$competition;
		$this->giveaway=$giveaway;
	}
	
	function getid_evenement(){
		return $this->id_evenement;
	}
	function getnom(){
		return $this->nom;
	}
	function getdate(){
		return $this->date;
	}

	function getid_client(){
		return $this->id_client;
	}
	function getnbrmax(){
		return $this->nbrmax;
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

	function setid_evenement($id_evenement){
		$this->id_evenement=$id_evenement;
	}
	function setnom($nom){
		$this->nom;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setnbrmax($nbrmax){
		$this->nbrmax=$nbrmax;
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