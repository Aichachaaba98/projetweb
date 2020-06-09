<?PHP
class categorie
{
	private $id_categorie;
	private $nom;
	private $description;
	
	

	function __construct($id_categorie,$nom, $description)
	{
		
		$this->id_categorie = $id_categorie;
		$this->nom = $nom;
		$this->description = $description;
		
		
	}

	function getid_categorie()
	{
		return $this->id_categorie;
	}
	
	function getnom()
	{
		return $this->nom;
	}
	
	function getdescription()
	{
		return	$this->description ;
	}
	
	

	//**************************************************/

	function setid_categorie($id_categorie)
	{
		$this->id_categorie= $id_categorie;

	}
	function setnom($nom)
	{
		$this->nom = $nom;

	}
	
	function setdescription($description)
	{
		$this->description = $description;

	}
	
	}
