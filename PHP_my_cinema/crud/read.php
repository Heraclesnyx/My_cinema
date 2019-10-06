<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="my_cinema.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="abonnement.php">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body>
		<div class="container"> <!--a modif -->
			<div class="row">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Type abonnement</th>
								<th>Prix</th>
								<th>Edition</th>
								
							</tr>
						</thead>
						<tbody>


<?php

	try{
		$DB = new PDO('mysql:host=localhost; dbname=my_cinema','root','');
		$DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e){ //$e = erreur
		echo "try again";
	}

	// if(!empty($_POST)){
	$abo  = "";

	$sql=("SELECT tp_fiche_personne.nom,prenom,tp_abonnement.nom AS Abonnement,prix FROM tp_membre INNER JOIN tp_fiche_personne ON tp_membre.id_fiche_perso=tp_fiche_personne.id_perso INNER JOIN tp_abonnement ON tp_membre.id_abo=tp_abonnement.id_abo ORDER BY nom");
	$recup= $DB->query($sql);//taper les requête dans le query pour les prochaines requêtes.
	while ($data = $recup->fetch()) {

		echo "<tr>";
		echo "<td>".$data['nom']."</td>";
		echo "<td>".$data['prenom']."</td>";
		echo "<td>".$data['Abonnement']."</td>";
		echo "<td>".$data['prix']."</td>";
		echo "<td>". '<a href="update.php"> <button type="button" class="btn btn-success">Update</button></a>'." ".'<button type="button" class="btn btn-danger">Delete</button>'; //apparition des boutons modifier et supprimer
		echo "</tr>";
	}

?>

						</tbody>
                          
					</table>
					
				</div>
			</div>
		</div>

	</body>
</html>

