<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/stylesheets/app.css">
        <link rel="stylesheet" href=<?= $page ?>>
        <title>Jeu de role</title>
    </head>
    <body>
        
        <?php if(isset($_SESSION['gladiator']) && $_SESSION['gladiator'] != null && isset($_GET['page'])) { ?>
            
            <div class="navlink logout">
                <form action="/_OPENCLASSROOMS/php_po/views/index.php" method="post">
                    <input type="hidden" name="action" value="logout">
                </form>
                Deconnection
            </div>

            <div class="navlink returnhome">
            <form action="/_OPENCLASSROOMS/php_po/views/index.php" method="get">
                </form>
                Accueil
            </div>
<?php
        } ?>

        <?= $content; ?>

        <script src="assets/js/app.js"></script>
    </body>
</html>