<?php
print_r($_GET["file"]);
if(!$_GET["file"] || $_GET["file"] == ".."){
    // echo "it's empty"."<br>";
    $currentDir = ".";
    // echo getcwd()."/".$currentDir;
    $currentDirPath = getcwd()."/".$currentDir;
}
else{
    // echo "it contains : ".$_GET["file"]."<br>";
    // foreach($_GET["file"])
    $currentDir = $_GET["file"];
    // echo getcwd()."/".$currentDir;
    $currentDirPath = getcwd()."/".$currentDir;
}

print_r($currentDir."/");
echo "<br>";
//thought i could use line below to check if user tried to type and go back in the url
//it would check if current url destination had "html" file for example and would change it back to root "."
var_dump(file_exists($currentDir."/html"));
// .$currentDir."/"


function list_file($dir = "."){
    $current_dir_location = $dir;
    // print_r($current_dir_location);
    // echo 'Voici quelques informations de débogage :';
    $dir_contents = scandir($current_dir_location);
    // print_r($dir_contents);
    // print_r(error_get_last());
    // var_dump($current_dir_location);

    foreach($dir_contents as $value){
        $fileExtention = pathinfo($value, PATHINFO_EXTENSION);
        // var_dump($fileExtention);
        // var_dump(is_dir($value));

        if (in_array($value, array(".", ".."))){
            continue;
        }
        elseif($fileExtention == "txt"){
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
        elseif(is_dir($value) || $fileExtention == ""){
        /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
        <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p>";*/
        print_r($currentDirPath);
        echo "<p><a href='index.php?file=".$current_dir_location."/".$value."'>
            <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p><p>".$value."</p></a>";
        }
        else {
            /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
            <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p>";*/
            echo "<p><a href='index.php?file=".$value."'>
                <img src='medias/basic-file-icon.png' alt='folder file logo' style='width : 20px;'></p><p>".$value."</p></a>";
            }
    }
}

?>

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

        <title>explorateur-fichier</title>
</head>

<body>
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