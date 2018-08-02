<?php
	// On inclut notre modèle
	require 'modele.php';
	try
	{
		// On récupère les données pour la vue
		$listeClients=getClients();	
		
		// On utilise notre vue client
		require 'vue_client.php';
	}
	catch (Exception $e)
	{
		echo '<html><head><meta charset="utf-8" /></head><body>Erreur : ' . $e->getMessage() . '<br />Code erreur $$$$ : ' . $e->getCode() . '</body></html>';
	}
