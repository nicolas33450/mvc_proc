<?php

// =========================
//   Contrôleur recherche client
// =========================
function rechClients($nom="",$ville="")
{
	try
	{
		// On récupère les données pour la vue
		$listeClients=getClients($nom,$ville);

		// On utilise notre vue client
		require 'vue/vue_client.php';
	}
	catch (Exception $e)
	{
		$messErreur = $e->getMessage();
		$codeErreur =$e->getCode();

		// On utilise la vue erreur
		require 'vue/vue_erreur.php';
	}
}
