<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Contenu de la table clients </title>
		<link rel="stylesheet" href="css/general.css" />
	</head>
	<body>

		<div id="principal">

		<?php
			$hote='localhost';	// Mettre le nom d'hôte fourni par l'hébergeur
			$bdd='basemvc';	// Mettre le nom de la base de données fourni par l'hébergeur
			$util='root';			// Mettre le nom de l'utilisateur de la base de données fourni par 
								// l'hébergeur
			$mdp='';			// Mettre le mot de passe
			try
			{
				@$pdo = new PDO('mysql:host=' . $hote . ';dbname=' . $bdd . ';charset=UTF8', $util,$mdp);
			}
			catch (PDOException $e)
			{
				echo 'La connexion a échouée : ' . utf8_encode($e->getMessage());
				exit(1);
			}

			// On définit la requête de sélection
			$requete = 'select n_cli, nom_cli, prenom_cli, cp_cli, ville_cli, email_cli from clients;';
		?>

			<header>
				Gestion clients
			</header>

			<div id="contenu">
				<h1>Liste des clients</h1>
				<?php
					// On exécute la requête
					$listeClients=$pdo->query($requete);
				?>

				<table id="tableau">
					<tr>
						<th>N°</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>CP</th>
						<th>Ville</th>
						<th>Email</th>
					</tr>
					<?php
					// On boucle pour traiter tous les clients
					foreach ($listeClients as $ligne_tab) :
					?>
						<tr>
							<td><?php echo $ligne_tab['n_cli']; ?></td>
							<td><?php echo $ligne_tab['nom_cli']; ?></td>
							<td><?php echo $ligne_tab['prenom_cli']; ?></td>
							<td><?= $ligne_tab['cp_cli'] ?></td>
							<td><?= $ligne_tab['ville_cli'] ?></td>
							<td><?= $ligne_tab['email_cli'] ?></td>
						</tr>
					<?php
					endforeach;
					?>
				</table>
				<?php
					// On vide le jeu d'enregistrements
					// il serait vidé automatiquement à la fin du programme
					$listeClients->closeCursor();
				?>
			</div>	
			<div id="blocpied"></div>
		</div>
		<footer id="pied">
				Pied du document
		</footer>
	</body>
</html>
