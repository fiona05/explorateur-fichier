<?php

if(isset($_GET["file"])){
//pareil que le split de javascript (je l'utilise dans de if en dessous pour vérif si il y a des ".." dans url)
$pathArray = explode("/", $_GET["file"]);
}
else{
    $pathArray = array(".");
    $_GET["file"] = ".";
}
// print_r($_GET["file"]);
// print_r($pathArray);
if(!$_GET["file"] || $_GET["file"] == ".." || in_array("..", $pathArray)){
    // echo "it's empty"."<br>";
    $currentDir = ".";
    // echo getcwd()."/".$currentDir;
    $currentDirPath = getcwd()."/".$currentDir;
    // header("Location: http://localhost:8080/");
    // exit;
}
else{
    // echo "it contains : ".$_GET["file"]."<br>";
    // foreach($_GET["file"])
    $currentDir = $_GET["file"];
    // echo getcwd()."/".$currentDir;
    $currentDirPath = getcwd()."/".$currentDir;
}

// print_r($currentDir."/");
// echo "<br>";
//thought i could use line below to check if user tried to type and go back in the url
//it would check if current url destination had "html" file for example and would change it back to root "."
// var_dump(file_exists($currentDir."/html"));
// .$currentDir."/"


function init_base_list($dir = "."){
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
        elseif(is_dir($current_dir_location."/".$value)){
        /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
        <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p>";*/
        // print_r($currentDirPath);
        echo "<div><p><a href='index.php?file=".$current_dir_location."/".$value."'>
            <img src='medias/file-icon.png' alt='folder file logo' class='icon-size'></p><p>".$value."</p></a></div>";
        }
        else{
            $mediasFolderContent = scandir("medias");
            // print_r($mediasFolderContent);
            $imgPath = $fileExtention."-file.png";
            // echo "is ".$imgPath." file";
            $bool = in_array($imgPath, $mediasFolderContent);
            // print_r($bool);
            if(in_array($imgPath, $mediasFolderContent)){
            /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
            <img src='medias/txt-file.png' alt='txt file logo' style='width : 20px;'></p>";*/
            echo "<div><p><a href='index.php?file=".$value."'>
            <img src='medias/".$fileExtention."-file.png' alt='".$fileExtention." file logo' class='icon-size'></p><p>".$value."</p></a></div>";
            }
            else {
                /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
                <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p>";*/
                echo "<div><p><a href='index.php?file=".$value."'>
                    <img src='medias/basic-file-icon.png' alt='default file logo' class='icon-size'></p><p>".$value."</p></a></div>";
            }
            
        }
    }
}


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
        // var_dump($value);
        // var_dump(is_file($value));

        if (in_array($value, array(".", "..")) && in_array("index.php", $dir_contents)){
            continue;
        }
        elseif(is_dir($current_dir_location."/".$value)){
        /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
        <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p>";*/
        // print_r($currentDirPath);
        echo "<div class='fade-anim'><p><a href='index.php?file=".$current_dir_location."/".$value."'>
            <img src='medias/file-icon.png' alt='folder file logo' class='icon-size'></p>
            <p class='folder-name'>".$value."</p></a></div>";
        }
        else{
            $mediasFolderContent = scandir("medias");
            // print_r($mediasFolderContent);
            $imgPath = $fileExtention."-file.png";
            // echo "is ".$imgPath." file";
            $bool = in_array($imgPath, $mediasFolderContent);
            // print_r($bool);
            if(in_array($imgPath, $mediasFolderContent)){
            /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
            <img src='medias/txt-file.png' alt='txt file logo' style='width : 20px;'></p>";*/
            echo "<div class='fade-anim'><p><a href=''>
            <img src='medias/".$fileExtention."-file.png' alt='".$fileExtention." file logo' class='icon-size'></p>
            <p class='file-name'>".$value."</p></a></div>";
            }
            else {
                /*echo "<p><a href='index.php?file=".$value."'>".$value."</a>
                <img src='medias/file-icon.png' alt='folder file logo' style='width : 20px;'></p>";*/
                echo "<div class='fade-anim'><p><a href=''>
                    <img src='medias/basic-file-icon.png' alt='default file logo' class='icon-size'></p>
                    <p class='file-name'>".$value."</p></a></div>";
            }
            
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
        <div class="container-fluid header-bg-color header-bg-color"> <!--TROUVER UN BACKGROUND -->
        
                <div class="row flex-column justify-content-start">
                    <div class="col-12 d-flex pt-4 pb-4">
                        <h1>Mister John Doe</h1> <!--TROUVER UNE BELLE FONT/POLICE-->
                        <p class="avatar"><img src="img/avatar-icon.png" alt="avatar-icon" width="" height=""></p> <!--TROUVER UN AVATAR-->
                    </div>
                </div>
                
        </div>
    </header>

    <main>
       <div class="container-fluid">
           <div class="">
                <div class="row bordure-bottom light-grey-bg">  <!--TROUVER UN BACKGROUND COULEUR-->
                    <div class="col-12">
                    <p class="text-uppercase font-weight-bold">fichiers: <?php echo " ".$currentDirPath."<br>\n"; ?></p>
                    </div> 
                </div>
                <div class="row"> 
                
                    <div class="col-12 d-flex flex-wrap pt-5 pb-5 main-bg-color">   <!--TROUVER UN BACKGROUND -->
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