<?PHP
class annonce{
	private $id_annonce;
	private $id_offre;
	private $id_produit;
	private $description;
	private $date_annonce;
	private $date_limite;
	private $id_client;

	function __construct($id_annonce,$id_offre,$id_produit,$description,$date_annonce,$date_limite,$id_client){
		$this->id_annonce=$id_annonce;
		$this->id_offre=$id_offre;
		$this->id_produit=$id_produit;
		$this->description=$description;
		$this->date_annonce=$date_annonce;
		$this->date_limite=$date_limite;
		$this->id_client=$id_client;
	}
	
	function getid_annonce(){
		return $this->id_annonce;
	}
	function getid_offre(){
		return $this->id_offre;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	function getdescription(){
		return $this->description;
	}
	function getdate_annonce(){
		return $this->date_annonce;
	}
	function getdate_limite(){
		return $this->date_limite;
	}

	function getid_client(){
		return $this->id_client;
	}

	function setid_annonce($id_annonce){
		$this->id_annonce=$id_annonce;
	}
	function setid_offre($id_offre){
		$this->id_offre=$id_offre;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setdate_annonce($date_annonce){
		$this->date_annonce=$date_annonce;
	}
	function setdate_limite($date_limite){
		$this->date_limite=$date_limite;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}

}

?>