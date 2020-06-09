<?PHP
class produit
{
	private $id_produit;

	private $nom;
	private $categorie;
	private $description;
	private $prix;
	private $lienimage;

	function __construct($id_produit,$nom, $categorie, $description, $prix,$lienimage)
	{
		
		$this->id_produit = $id_produit;
		$this->nom = $nom;
		$this->categorie = $categorie;
		$this->description = $description;
		$this->prix = $prix;
		$this->lienimage = $lienimage;
		
	}

	function getid_produit()
	{
		return $this->id_produit;
	}
	
	function getnom()
	{
		return $this->nom;
	}
	function getcategorie()
	{
		return 	$this->categorie;
	}
	function getdescription()
	{
		return	$this->description ;
	}
	function getprix()
	{
		return $this->prix;
	}
	function getlienimage()
	{
		return $this->lienimage;
	}
	

	//**************************************************/

	function setid_produit($id_produit)
	{
		$this->id_produit= $id_produit;

	}
	function setnom($nom)
	{
		$this->nom = $nom;

	}
	function setcategorie($categorie)
	{
		$this->categorie = $categorie;

	}
	function setdescription($description)
	{
		$this->description = $description;

	}
	function setprix($prix)
	{
		$this->prix = $prix;

	}
	}
