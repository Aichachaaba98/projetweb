<?PHP
class promotion{
	private $idpromotion;
	private $dateDebut;
	private $dateFin;
	private $valeur;
	function __construct($idpromotion,$dateDebut,$dateFin,$valeur){
		$this->idpromotion=$idpromotion;
		$this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin;
		$this->valeur=$valeur;
	}
	
	function getidpromotion(){
		return $this->idpromotion;
	}
	function getdateDebut(){
		return $this->dateDebut;
	}
	function getvaleur(){
		return $this->valeur;
	}
	function getdateFin(){
		return $this->dateFin;
	}
    function setidpromotion($idpromotion){
		$this->idpromotion=$idpromotion;
	}

	function setdateDebut($dateDebut){
		$this->dateDebut=$dateDebut;
	}
	function setvaleur($valeur){
		$this->valeur=$valeur;
	}
	function setdateFin($dateFin){
		$this->dateFin=$dateFin;
	}
	
}

?>