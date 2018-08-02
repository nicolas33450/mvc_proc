<?php
	// ===============================================
	//	Fonction qui permet la connexion à la base de données
	// ===============================================

	function getConnex()
	{
		require 'connexion.php';

		// On retourne notre objet PDO
		return $pdo;
	}

	// ========================================
	//	Fonction qui permet de récupérer les clients
	// ========================================

	function getClients()
	{
		// On se connecte à la base de données
		$pdo=getConnex();
		
		// On définit la requête de sélection
		$requete = 'select n_cli, nom_cli, prenom_cli, cp_cli, ville_cli, email_cli from clients;';

		// On exécute la requête
		$resultat=$pdo->query($requete);

		// On retourne tous les clients
		return $resultat;
	}
