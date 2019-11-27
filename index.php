
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
    <?php
// print_r($_GET["file"]);
if(!$_GET["file"]){
    echo "it's empty"."<br>";
    $currentDir = ".";
    echo getcwd()."/".$currentDir;
    $currentDirPath = getcwd()."/".$currentDir;
}
else{
    echo "it contains : ".$_GET["file"]."<br>";
    $currentDir = $_GET["file"];
    echo getcwd()."/".$currentDir;
    $currentDirPath = getcwd()."/".$currentDir;
}
//créer une fonction qui, quand on l'appel avec un nom de dossier (qui sera mit dans $name), génère une liste
//de tous les dossiers et sous dossier et leurs contenue;
function list_directory($name, $level=0){

    //ouvre dossier avec opendir (position '.' = ici) et donne contenue a $directory (retourne pas 'false' si c'est fait
    //ce qui active le if)...
    if ($directory = opendir($name)) {

        //'\n' = fin de ligne;
        // echo "Pointeur: ".$directory."<br>\n";
        //getcwd() (ou "get curren working directory") donne chemin du dossier actuel
        // echo "Chemin: ".getcwd()."<br>\n";

        //tant qu'il y a des éléments dans le dossier (lu avec 'readdir'), associe $file au fichier lu et fait en un echo
        //readdir() retourne le nom de la prochaine entrée du dossier identifié par dir_handle.
        // Les entrées sont retournées dans l'ordre dans lequel elles sont enregistrées dans le système de fichiers.
        while($file = readdir($directory)) {
            $tempSpace = "&nbsp;";
            //boucle qui crééra un espace (echo "&nbsp;") 4 * par niveau de profondeur
            for($i = 1; $i < (6 * $level); $i++){
                // echo "&nbsp;";
                $tempSpace .= "&nbsp;";
            }
            // echo "<div><a href='index.php?file=".$file."'>".$tempSpace.$file."</div><br>\n";

          //verifie si $file est un dossier (is_dir) et si $file est un dossier "." ou ".."
          //in_array est une fonction qui verif si le premier est contenue dans le tableau du second
          //dans ce cas précis, un tableau/array est créé (avec 'array()' directement dans la fonction in_array)
          if(is_dir($file) && !in_array($file, array(".", "..", ".git"))){
              echo "<p><a href='index.php?file=".$file."'>".$tempSpace.$file."</p><br>\n";
              //refait l'affichage de ce qui est contenue dans le dossier $file et rajoute +1 au niveau
              //de profondeur pour les espaces
              list_directory($file, $level+1);
          }
        }

        //ferme le fichier en cours d'etre lu (il est préférable de fermer des choses ouverte avec opendir)
        //"Ferme le ->pointeur<- sur le dossier"
        closedir($directory);
      }
}

//active fonction et dit a la fonction de commencer au dossier actuel (avec ".");
// list_directory(".");

function list_file($dir = "."){
    $current_dir_location = $dir;
    // print_r($current_dir_location);
    // echo 'Voici quelques informations de débogage :';
    $dir_contents = scandir($current_dir_location);
    // print_r($dir_contents);
    // print_r(error_get_last());

    foreach($dir_contents as $value){
        $fileExtention = pathinfo($value, PATHINFO_EXTENSION);
        // var_dump($fileExtention);
        if($fileExtention == "txt"){
            /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
            <img src='medias/txt-file.png' alt='txt file logo' style='width : 20px;'></p>";*/
            echo "<p><a href='index.php?file=".$value."'>
            <img src='medias/txt-file.png' alt='txt file logo' style='width : 20px;'></p><p>".$value."</p></a>";
            
        }
        elseif($fileExtention == "php"){
            /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
            <img src='medias/php-file.png' alt='php file logo' style='width : 20px;'></p>";*/
            echo "<p><a href='index.php?file=".$value."'>
            <img src='medias/php-file.png' alt='php file logo' style='width : 20px;'></p><p>".$value."</p></a>";
        }
        else{
        /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
        <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p>";*/
        echo "<p><a href='index.php?file=".$value."'>
            <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p><p>".$value."</p></a>";
        }
    }
}

?>

    <!-- Fiona section-->
    <!-- Franck section-->
    <!-- Fayçal section-->
    <!-- <div style="float:right">
    <a href="#" onclick="display_('touch');"><img title="Cree un fichier"  title="Cree un fichier" src="<?php// echo $IMGCREATEFILE; ?>" /></a><br />
    <a href="#" onclick="display_('upload');"><img title="Telecharger un fichier"  title="Telecharger un fichier" src="<?php// echo $IMGUPLOAD; ?>" /></a><br />
    <a href="#" onclick="display_('mkdir');"><img title="Cree un dossier"  title="Cree un dossier" src="<?php //echo// $IMGCREATEFOLDER; ?>" /></a><br />
    <a href="#" onclick="display_('search');"><img title="Chercher"  title="Chercher" src="<?php// echo $IMGSEARCH; ?>" /></a></span><br />
    <a href="#" onclick="display_('rename');"><img title="Renommer"  title="Renommer" src="<?php// echo $IMGRENAME; ?>" /></a></span><br /> -->
    

    

   

    
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
                    <p class="text-uppercase font-weight-bold">fichiers: <?php echo " ".$currentDirPath."<br>\n"; ?></p> 
                </div>
                <div class="row">         <!--TROUVER DES ICONS POUR FICHIERS: css, index, media, php, js-->
                    <div class="col-4">   <!--TROUVER UN BACKGROUND COULEUR-->
                        <?php list_file(); ?>
                    </div>
                    <div class="col-8">   <!--TROUVER UN BACKGROUND -->
                        <?php list_file($currentDir); ?>
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