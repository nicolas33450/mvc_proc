<?php

// ============================
//   Contrôleur accueil (page defaut)
// ============================
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
