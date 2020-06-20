<?PHP
class produits{
	protected $idprod;
	protected $nom;
	protected $idcategorie;
	protected $qualite;
	protected $description; 
	protected $prix;
	protected $quantite;
	protected $disponibilite;
	protected $image;
	
	
	function __construct($idprod,$nom,$idcategorie,$qualite,$description,$prix,$quantite,$disponibilite,$image){
		$this->idprod=$idprod;
		$this->nom=$nom;
		$this->idcategorie=$idcategorie;
		$this->qualite=$qualite;
		$this->description=$description;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->disponibilite=$disponibilite;
			$this->image=$image;

	}
	function getIdprod(){
		return $this->idprod;
	}
	function setIdprod($idprod){
		$this->idprod=$idprod;
	}
	function getNom(){
		return $this->nom;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function getIdCategorie(){
		return $this->idcategorie;
	}
	function setIdCategorie($idcategorie){
		$this->idcategorie=$idcategorie;
	}
	function getQualite(){
		return $this->qualite;
	}
	function setQualite($qualite){
		$this->qualite=$qualite;
	}
	function getDescription(){
		return $this->description;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function getPrix(){
		return $this->prix;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function getDisponibilite(){
		return $this->disponibilite;
	}
	function setDisponibilite($disponibilite){
		$this->disponibilite=$disponibilite;
	}
	function getImage(){
		return $this->image;
	}
	function setImage($image){
		$this->image=$image;
	}
	
	
}

?>