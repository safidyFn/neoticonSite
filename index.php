<?php
include "functions.php";


$header();

?>
<section id="homePage" class="bg-gray radius-25 height-100 position-relative">
    <?php menu(); ?>
    <div class="row pt-10 ">
        <div class="col-4 pl-6">
            <div class="container-tittle mb-12 pl-3">
                <h1 class="text-uppercase">
                    Web Offshore
                    <br>Freelance
                </h1>
            </div>
            <div class="container-descriptions">
                <h2 class="text-uppercase">à propos</h2>
                <p class="py-1 starttext">Neoticon est un groupe de freelancer web offshore formé par des jeunes développeur, intégrateur et graphiste. Notre mission consiste à sous-traiter l'ensemble ou une partie de la production d'une agence web. Nous pouvons prendre en main toute les aspects  technique de votre projet web, logographie, flyers ou bien d'autres.</p>
            </div>
        </div>
        <div class="col-5">
            <div class="container-home">
                <div class="img-slider">
                    <span><img src="assets/images/home.png" width="100%" alt=""></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-flex-end">
        <div class="col-6 bg-yellow">
            <div class="contact-details d-flex py-1-n-5 pl-6">
                <div class="phone contact mr-lg-10">
                    <a class="text-dark" href="#">+261 34 56 575 72</a>
                </div>
                <div class="mail contact">
                    <a class="text-dark" href="mailto:neoticonteam@gmail.com">neoticonteam@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="col-4">

        </div>
        <div class="col-2">
            <div class="next-page">
                <p class="mb-3">Vous pouvez accédez à notre prestation</p>
                <div class="imgsuivant text-right mr-5">
                    <a href="#"><img src="assets/images/suivant.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$footer();