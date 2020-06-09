<?php
class panierC
{
	
    function recupererpanier($id_panier)
	{
   		$sql="SELECT * from panier where id_panier= $id_panier";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>