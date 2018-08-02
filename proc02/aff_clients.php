<?php
    require 'connexion.php';
	// On définit la requête de sélection
	$requete = 'select n_cli, nom_cli, prenom_cli, cp_cli, ville_cli, email_cli from clients;';

	// On exécute la requête
	$listeClients=$pdo->query($requete);

    // on utilise notre vue client
    require 'vue_client.php';

?>


