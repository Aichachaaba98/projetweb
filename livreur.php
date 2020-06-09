<?PHP
class livreur{
	private $cin_livreur;
	private $nom;
	private $prenom;
	private $tel;
	private $disponibilite;
	function __construct($cin_livreur,$nom,$prenom,$tel,$disponibilite){
		$this->cin_livreur=$cin_livreur;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;		
		$this->disponibilite=$disponibilite;


	}
	
	function getcin_livreur(){
		return $this->cin_livreur;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function gettel(){
		return $this->tel;
	}
	function getdisponibilite(){
		return $this->disponibilite;
	}
	
	function setnom($nom){
		$this->nom=$nom;
	}
	
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function settel($tel){
		$this->tel=$tel;
	}
	function setdisponibilite($disponibilite){
		$this->disponibilite=$disponibilite;
	}
	
}

?>