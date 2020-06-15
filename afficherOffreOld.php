<?PHP
include "../core/offreC.php";
$offre1C=new offreC();
$listeoffres=$offre1C->afficheroffres();

//var_dump($listeoffres->fetchAll());
?>
<table border="1">
<tr>
<td>idOffre</td>
<td>Nom</td>
<td>dateDebut</td>
<td>dateFin</td>
<td>description</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeoffres as $row){
	?>
	<tr>
	<td><?PHP echo $row['idOffre']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['dateDebut']; ?></td>
	<td><?PHP echo $row['dateFin']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><form method="POST" action="supprimeroffre.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idOffre']; ?>" name="idOffre">
	</form>
	</td>
	<td><a href="modifierOffre.php?idOffre=<?PHP echo $row['idOffre']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


