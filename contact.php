<?php
include "functions.php";


$header();

?>
<section id="contact" class="bg-gray radius-25 height-100 position-relative">
    <?php menu(); ?>
    <form id="form_neoticon" action="#" class="height-100" method="POST">
        <div class="row height-100 mb-5">
            <div class="col-7 pt-15 px-0 contact-rows">
                    <div class="pl-6">
                        <div class="title_contact">
                            <h1 class="text-uppercase">
                                Contactez-nous
                            </h1>
                        </div>
                        <div class="form-contact pt-4">
                            <div class="nom_societe mt-4 mb-3">
                                <label class="d-block titleForm" for="entreprise">Nom (ou société)</label>
                                <input class="text-light" type="text" name="entreprise" id="entreprise">
                            </div>
                            <div class="nom_societe mt-4 mb-3">
                                <label class="d-block titleForm" for="email">E-mail</label>
                                <input class="text-light" type="text" name="email" id="email">
                            </div>
                            <div class="nom_societe mt-4 mb-3">
                                <p class="titleForm d-block mb-2" for="entreprise">Verification</p>
                                <input type="checkbox" name="verification" id="verification">
                                <label for="verification">Je ne suis pas un robot</label>
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
                <div class="col-5 px-6 pt-15">
                    <div class="nom_societe mt-4 mb-3">
                                    <label class="d-block titleForm mb-3" for="message">Messsage</label>
                                    <textarea name="message" class="p-2 width-100" id="message" rows="15" class="p-2"></textarea>
                                </div>
                    <div class="envoyer_btn text-right">
                        <input type="submit" class="bg-yellow text-dark border-0 px-10 py-1-n-5" value="Envoyer">
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<?php
$footer();