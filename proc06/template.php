<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=  $titre;  ?></title>
        <link rel="stylesheet" href="css/general.css" />
    </head>
    <body>
        <div id="principal">
           
            <header>
                <?= $enTete;  ?>
            </header>

            <div id="contenu">
                <?= $contenu;  ?>
            </div>
            
            <div id="blocpied"></div>
        </div>
        
        <footer id="pied">
            Pied du document
        </footer>
    </body>
</html>
