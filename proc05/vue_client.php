<?php $titre = 'Contenu de la table clients'; ?>

<?php $enTete = 'Gestion clients'; ?>

<?php ob_start(); ?>

<h1>Liste des clients TPL</h1>
<table id="tableau">
    <tr>
        <th>N°</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>CP</th>
        <th>Ville</th>
        <th>Email</th>
    </tr>

    <?php
    // On boucle pour traiter tous les clients
    foreach ($listeClients as $ligne_tab){
    ?>
    <tr>
        <td><?php echo $ligne_tab['n_cli']; ?></td>
        <td><?php echo $ligne_tab['nom_cli']; ?></td>
        <td><?php echo $ligne_tab['prenom_cli']; ?></td>
        <td><?= $ligne_tab['cp_cli'] ?></td>
        <td><?= $ligne_tab['ville_cli'] ?></td>
        <td><?= $ligne_tab['email_cli'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>

<?php $contenu = ob_get_clean(); ?>

<?php require 'template.php'; ?>
