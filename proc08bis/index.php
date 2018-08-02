<?php

// On inclut notre modèle (nos contrôleurs en ont besoins)
require 'modele.php';

// On inclut les différents contrôleurs
require 'ctrl_accueil.php';
require 'ctrl_rechclients.php';
require 'ctrl_recharticles.php';

try {
	// =======================================
	// En fonction de la page ou des données reçues,  
	// le dispatcheur appelle le contrôleur nécessaire
	// =======================================

	// Si la VARIABLE page a été envoyée par la méthode GET
	if (isset($_GET['page'])) 
	{
		// Si la page correspond à client
		if ($_GET['page'] == 'client') 
		{
			rechClients();
		}
		else
		{
			rechArticles();
		}
	}
	else 
	{
		// Page affichée par défaut
		defaut();
	}
}
catch (Exception $e) {
	$messErreur = $e->getMessage();
	$codeErreur =$e->getCode();

	// On utilise la vue erreur
	require 'vue_erreur.php';
}
