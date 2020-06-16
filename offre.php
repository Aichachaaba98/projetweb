<?PHP
class offre{
	private $idOffre;
	private $dateDebut;
	private $dateFin;
	private $description;
	function __construct($idOffre,$dateDebut,$dateFin,$description){
		$this->idOffre=$idOffre;
		$this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin;
		$this->description=$description;
	}
	
	function getidOffre(){
		return $this->idOffre;
	}
	function getdateDebut(){
		return $this->dateDebut;
	}
	function getdescription(){
		return $this->description;
	}
	function getdateFin(){
		return $this->dateFin;
	}
    function setidOffre($idOffre){
		$this->idOffre=$idOffre;
	}

	function setdateDebut($dateDebut){
		$this->dateDebut=$dateDebut;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function setdateFin($dateFin){
		$this->dateFin=$dateFin;
	}
	
}

?>