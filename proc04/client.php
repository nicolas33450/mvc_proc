
<?php

// On inclut notre modèle
require 'modele.php';

// On récupère les données pour la vue
$listeClients=getClients();

// On utilise notre vue client
require 'vue_client.php';



