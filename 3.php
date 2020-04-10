

<?php   
//Ajout d'un membre
$bdd = new PDO('mysql:host=localhost;dbname=TPnoter;charset=utf8', 'root', '');
$req = "INSERT INTO `societedhonneur` (`ID`, `Prenom`, `Nom`, `DateAdhesion`, `Position`, `Majeure`, `MoyenneCumulative`, `PaysEtudeInterl`) VALUES ('105', '', '', '2020-04-08', '', '', '103', '')";

$bdd->query($req); //envoie la variable req faites au


//Suppression d'un membre

$req = "DELETE FROM `societedhonneur` WHERE `societedhonneur`.`ID` = 103";

$bdd->query($req); //envoie la variable req faites au

//Trie par ordre croissant et decroissant

$req = "SELECT * FROM `societedhonneur` ORDER BY `societedhonneur`.`Majeure` ASC";
$resultat=$bdd->query($req);


foreach ($resultat as $row){
	echo $row["ID"]." ";

}
$req = "SELECT * FROM `societedhonneur` ORDER BY `societedhonneur`.`Majeure` DESC";
$resultat=$bdd->query($req);


foreach ($resultat as $row){
	echo $row["ID"]." ";

}
//Max/min

echo "nouveau";
$req1 = "SELECT MAX(ID) FROM 'societedhonneur'";
$resultat=$bdd->query($req1);

foreach($bdd->query('SELECT MAX(ID)
	FROM societedhonneur') as $row) {
	echo "<tr>";
	echo "<td>" . $row['MAX(ID)'] . "</td>";
	echo "</tr>";
}
foreach($bdd->query('SELECT MIN(ID)
	FROM societedhonneur') as $row) {
	echo "<tr>";
	echo "<td>" . $row['MIN(ID)'] . "</td>";
	echo "</tr>";
}


//moyenne
echo "moyenne ";
$req="SELECT SUM(ID)/count(DISTINCT ID) as 'avg' from societedhonneur";
$resultat=$bdd->query($req);

foreach($resultat as $row)  {
echo $row['avg'];
}



?>
 


