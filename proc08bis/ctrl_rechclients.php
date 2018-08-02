<?php

// ====================================
//   Contrôleur recherche client
// ====================================
function rechClients()
{
	try
	{
		// On récupère les données pour la vue
		$listeClients=getClients();	

		// On utilise notre vue client
		require 'vue_client.php';
	}
	catch (Exception $e)
	{
		$messErreur =$e->getMessage();
		$codeErreur =$e->getCode();

		// On utilise la vue erreur
		require 'vue_erreur.php';
	}
}
