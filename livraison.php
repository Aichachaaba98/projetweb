<?PHP
class livraison{
	private $id_livraison;
	//private $nom;
	//private $adresse;
	//private $numtel;
	private $id_commande;
	private $cin_livreur;
	private $date_livraison;
	private $total_livraison;
	private $etat;
	function __construct($id_livraison,$id_commande,$cin_livreur,$date_livraison,$total_livraison,$etat){
		$this->id_livraison=$id_livraison;
		$this->id_commande=$id_commande;
		$this->cin_livreur=$cin_livreur;
		$this->date_livraison=$date_livraison;
		$this->total_livraison=$total_livraison;
		$this->etat=$etat;

		
		
	}
	
	function getidlivraison(){
		return $this->id_livraison;
	}
	function gettotal(){
		return $this->total_livraison;
	}
	
	function getidcommande(){
		return $this->id_commande;
	}
	function getlivreur(){
		return $this->cin_livreur;
	}
	function getdate_livraison(){
		return $this->date_livraison;
	}
	function getetat()
	{
        return $this->etat;
	}
	
//setters
	
	function setlivraison($id_livraison){
		$this->$id_livraison=$id_livraison;
	}
	
	function setdate_livraison($date_livraison){
		$this->date_livraison=$date_livraison;
	}
	function settotal_livraison($total_livraison){
		$this->total_livraison=$total_livraison;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	
}

?>