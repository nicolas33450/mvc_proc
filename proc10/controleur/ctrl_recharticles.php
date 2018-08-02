<?php

// ====================================
//    Contrôleur recherche article
// ====================================
function rechArticles()
{
	try
	{
		// On récupère les données pour la vue
		$listeArticles=getArticles();	
		
		// On utilise notre vue article
		require 'vue/vue_article.php';
	}
	catch (Exception $e)
	{
		$messErreur =$e->getMessage();
		$codeErreur =$e->getCode();

		// On utilise la vue erreur
		require 'vue/vue_erreur.php';
	}
}
