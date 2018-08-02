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

function getClients($nom="",$ville="")
	{
		// On se connecte à la base de données
		$pdo=getConnex();

		// On prépare la requête de sélection (on trie par nom et par ville)
		$requete = $pdo->prepare("select n_cli, nom_cli, prenom_cli, cp_cli, ville_cli, email_cli from clients where nom_cli like ? and ville_cli like ? order by nom_cli, ville_cli");

		// On ajoute le signe % pour prendre tout ce qui commence par
		$nom = $nom . '%';
		$ville = $ville . '%';

		// On exécute la requête avec les paramètres
		$requete->execute([$nom, $ville]);

		// On transfère toutes les lignes dans un tableau
		$resultat =  $requete->fetchAll(PDO::FETCH_ASSOC);

		// On retourne tous les clients
		return $resultat;
	}


// ================================================
//	Fonction qui permet de récupérer les articles
// ================================================

function getArticles()
{
    // On se connecte à la base de données
    $pdo=getConnex();

    // On définit la requête de sélection
    $requete = 'select n_art, nom_art, descr_art, prix_art from articles;';

    // On exécute la requête
    $resultat=$pdo->query($requete);

    // On retourne tous les articles
    return $resultat;
}

