<?php
include "functions.php";


$header();

?>
<section id="contact" class="bg-gray radius-25 height-100 position-relative">
    <?php menu(); ?>
    <form id="form_neoticon" action="#" class="height-100" method="POST">
        <div class="row height-100 mb-5">
            <div class="col-7 pt-15 px-0 contact-rows">
                <div id="siteweb" class="prestations_sections pt-5 show">
                    <div class="prestation_web">
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div id="conceptionweb" class="prestations_sections pt-5">
                    <div class="conceptionweb">
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div id="logographie" class="prestations_sections pt-5">
                    <div class="prestation_web">
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div id="flyers" class="prestations_sections pt-5">
                    <div class="prestation_web">
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                        <div class="site_slick">
                            <img src="assets/images/home.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="bg-yellow contact-details d-flex py-1-n-5 pl-6">
                    <div class="phone contact mr-lg-10">
                        <a class="text-dark" href="#">+261 34 56 575 72</a>
                    </div>
                    <div class="mail contact">
                        <a class="text-dark" href="mailto:neoticonteam@gmail.com">neoticonteam@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-5 pt-15">
                <div class=" pl-5 list_navigation">
                    <ul class="nav_list list-unstyled">
                        <li class="py-1">
                            <a class="text-light active" href="#" data-section="siteweb">Site  web sur mesure</a>
                        </li>
                        <li class="py-1">
                            <a class="text-light" href="#" data-section="conceptionweb">Conception maquette web</a>
                        </li>
                        <li class="py-1">
                            <a class="text-light" href="#" data-section="logographie">Logographie</a>
                        </li>
                        <li class="py-1">
                            <a class="text-light" href="#" data-section="flyers">Flyers/Brochures/carte visite</a>
                        </li>
                    </ul>
                </div>
                <div class="text-right pr-6 contact-details">
                    <div class="next-page">
                        <p class="mb-3">Vous pouvez nous contactez
                        <br>pour établir un CDC</p>
                        <div class="imgsuivant text-right">
                            <a href="#"><img src="assets/images/suivant.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<?php
$footer();