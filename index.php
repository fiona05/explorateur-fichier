<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Fiona PEREIRA GOMES">
        <meta name="category" content="">
        <meta name="Keywords" content="">
        <!-- Facebook -->
        <meta property="og:locale" content="fr_FR">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="http://fionap.promo-vesoul33.codeur.online/">
        <meta property="og:url" content="http://fionap.promo-vesoul33.codeur.online/formulaire-php/index.html">
        <meta property="og:image:width" content="">
        <meta property="og:image:height" content="">
        <meta property="og:image:alt" content="facebook_partage">
        <!-- Twitter -->
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="http://fionap.promo-vesoul33.codeur.online/">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="https://twitter.com/">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!--  css-->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="file/style-explorateur.css" />
<script language="javascript" type="text/javascript" src="file/javascript.js"></script> 

        <title>explorateur-fichier</title>
</head>

<body>
    <!-- Sacha section-->
    <!-- Fiona section-->
    <!-- Franck section-->
    <!-- Fayçal section-->
    <!-- <div style="float:right">
    <a href="#" onclick="display_('touch');"><img title="Cree un fichier"  title="Cree un fichier" src="<?php echo $IMGCREATEFILE; ?>" /></a><br />
    <a href="#" onclick="display_('upload');"><img title="Telecharger un fichier"  title="Telecharger un fichier" src="<?php echo $IMGUPLOAD; ?>" /></a><br />
    <a href="#" onclick="display_('mkdir');"><img title="Cree un dossier"  title="Cree un dossier" src="<?php echo $IMGCREATEFOLDER; ?>" /></a><br />
    <a href="#" onclick="display_('search');"><img title="Chercher"  title="Chercher" src="<?php echo $IMGSEARCH; ?>" /></a></span><br />
    <a href="#" onclick="display_('rename');"><img title="Renommer"  title="Renommer" src="<?php echo $IMGRENAME; ?>" /></a></span><br /> -->
    <?php

    $myfille = fopen("infos.txt","r");

    if(!$myfile)
    exit("Ouverture du fichier impossible");//die()

    

    
    </div>
    <header>
        <div class="container-fluid"> <!--TROUVER UN BACKGROUND -->
            <div class="container"> <!--TROUVER UN BACKGROUND -->
                <div class="row flex-column justify-content-start">
                    <p><img src="" alt="avatar-icon" width="" height=""></p> <!--TROUVER UN AVATAR-->
                    <h1>Mister John Doe</h1> <!--TROUVER UNE BELLE FONT/POLICE-->
                </div>
            </div>
        </div>
    </header>

    <main>
       <div class="conyainer-fluid">
           <div class="container">
                <div class="row">  <!--TROUVER UN BACKGROUND COULEUR-->
                    <p class="text-uppercase font-weight-bold">fichiers:</p> 
                </div>
                <div class="row">         <!--TROUVER DES ICONS POUR FICHIERS: css, index, media, php, js-->
                    <div class="col-4">   <!--TROUVER UN BACKGROUND COULEUR-->
                    </div>
                    <div class="col-8">   <!--TROUVER UN BACKGROUND -->
                    </div>
                </div>

            </div>
        </div>
    </main>
    
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>