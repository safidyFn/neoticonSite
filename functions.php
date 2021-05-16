<?php
define("HOME", "http://neoticon.site/");

/**
 * @param string Lien logo
 */
function logo() {
    ob_start();
        ?>
            <div class="logo_container">
                <div class="img_logo">
                        <a href="<?php echo HOME ?>" class="logo"></a>
                        <span>
                            <img src="<?php echo HOME ?>assets/images/neoticon.png" class="" width="100%" alt="Logo Neoticon">
                        </span>
                </div>
            </div>
        <?php
    $homeLogo = ob_get_clean();
    
    echo $homeLogo;
}


function menu(){
   ob_start();
    ?>

        <header id="logo_menu_container">
                <div class="row py-3">
                    <div class="col-2  position-relative">
                        <div class="logo">
                            <?php logo(); ?>
                        </div>
                    </div>
                    <div class="col-5">

                    </div>
                    <div class="col-5 pt-1">
                        <div class="menu-nav">
                            <nav class="vertical menu">
                                <ul class="menu-navigation justify-content-end p-0 pr-2">
                                    <li class="text-light text-uppercase montserrat-Light"><a href="index.php" class="text-light">Accueil</a></li>
                                    <li class="text-light text-uppercase montserrat-Light"><a href="prestations.php" class="text-light">Nos prestations</a></li>
                                    <li class="text-light text-uppercase montserrat-Light"><a href="contact.php" class="text-light">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
        </header>

    <?php
   $menu = ob_get_clean();
   echo $menu;
}


/**
 * @param string Title du page 
 */
$header = function($title = "Site Agency Neoticon") {
    ob_start();
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title; ?></title>
            <link rel="shortcut icon" href="<?php echo HOME ?>favicon.png" type="image/x-icon">

            <link rel="stylesheet" href="assets/pre-styles/pre-styles.min.css">
            <link rel="stylesheet" href="assets/css/styles.css">

            <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        </head>
        <body class="px-lg-10 px-sm-2 py-sm-2 py-lg-7-n-5">
    <?php
    $head = ob_get_clean();
    echo $head;
};



$footer = function() {
    ob_start();
    ?>
        </body>
        <script src="<?php echo HOME ?>assets/javascript/jquery.min.js"></script>
        <script src="<?php echo HOME ?>assets/javascript/script.js"></script>

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        </html>
    <?php
    $foot = ob_get_clean();
    echo $foot;
};

