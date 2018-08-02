<?php

// On inclut notre modèle (tous les contrôleurs en ont besoins)
require 'modele.php';

// ========================
//   Contrôleur recherche client
// ========================
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
		$messErreur = $e->getMessage();
		$codeErreur =$e->getCode();

		// On utilise la vue erreur
		require 'vue_erreur.php';
	}
}

// ========================
//   Contrôleur recherche article
// ========================

function rechArticles()
{	try
	{
		// On récupère les données pour la vue
		$listeArticles=getArticles();	

		// On utilise notre vue article
		require 'vue_article.php';
	}
	catch (Exception $e)
	{
		$messErreur = $e->getMessage();
		$codeErreur =$e->getCode();

		// On utilise la vue erreur
		require 'vue_erreur.php';
	}
}

// ===========================
//   Contrôleur accueil (page defaut)
// ===========================
function defaut()
{
	try
	{
		// On utilise notre vue accueil
		require 'vue_accueil.php';
	}
	catch (Exception $e)
	{
		$messErreur =$e->getMessage();
		$codeErreur =$e->getCode();

		// On utilise la vue erreur
		require 'vue_erreur.php';
	}
}
