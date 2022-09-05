<?php get_header() ?>

<?php
$url = site_url();


$domain = explode('.', $_SERVER['HTTP_HOST']);
$subdomain = $domain[0];

$ville = ucfirst($subdomain);


?>


<?php

if ($ville == "Kremlinbicetre") {
    $wpformId = "41";
    $ville = "Kremlin-Bicêtre";
} else if ($ville == "Argenteuil") {
    $wpformId = "25";
} else if ($ville == "Pfmkws") {
    $wpformId = "696";
} else if ($ville == "Clichy") {
    $wpformId = "14";
} else if ($ville == "Eaubonne") {
    $wpformId = "25";
} else if ($ville == "Antony") {
    $wpformId = "20";
} else if ($ville == "Colombes") {
    $wpformId = "14";
} else if ($ville == "Poissy") {
    $wpformId = "6";
} else if ($ville == "Saint-denis") {
    $wpformId = "22";
} else if ($ville == "Clamart") {
    $wpformId = "7";
} else if ($ville == "Boulogne-billancourt") {
    $wpformId = "5";
    $ville = "Boulogne-Billancourt";
} else if ($ville == "Suresnes") {
    $wpformId = "19";
} else if ($ville == "Creteil") {
    $wpformId = "7";
} else if ($ville == "Nanterre") {
    $wpformId = "29";
} else if ($ville == "Yvelines") {
    $wpformId = "6";
} else if ($ville == "Valdoise") {
    $wpformId = "5";
    $ville = "Val d'Oise";
} else if ($ville == "Pontoise") {
    $wpformId = "6";
} else if ($ville == "Hautdeseine") {
    $wpformId = "5";
    $ville = "Hauts-de-Seine";
} else if ($ville == "Saintouen") {
    $wpformId = "5";
    $ville = "Saint-Ouen";
} else if ($ville == "Villejuif") {
    $wpformId = "7";
} else if ($ville == "Paris") {
    $wpformId = "8";
} else if ($ville == "Versailles") {
    $wpformId = "16";
} else if ($ville == "Sartrouville") {
    $wpformId = "5";
} else if ($ville == "Gonesse") {
    $wpformId = "5";
} else if ($ville == "Seinesaintdenis") {
    $wpformId = "6";
    $ville = "Seine-Saint-Denis";
}
?>

<div class="cadre_un">

<?php get_template_part('parts/carousel')?>

<!-- 
    <section class="intro">

        <div class="text_intro_ask">

            Vous recherchez une pompe funèbre musulmane à <span><?= $ville ?></span> ? 
        
        </div>

        <div class="text_intro_answer">Les pompes funèbres musulmanes Kitab Wa Sunna interviennent sur votre ville sur simple demande.
        </div>

        <div class="images_un"><img src="<?= get_theme_file_uri() ?>/assets/img/lamps.jpg" alt="Lampes"></div>


    </section> -->
</div>
<div class="cadre_deux">
<?php get_template_part('parts/cards')?>



</div>

<div class="cadre_trois">

    <section class="contact">
        <div class="intro_contact">
            Nous contacter ?

        </div>
        <div class="text_contact"> La mort peut surgir à tout moment, sans prevenir. <br>Aussi, nous sommes disponibles et pouvons intervenir sur <span><?= $ville ?></span> 24h/24 et 7j/7. <br><br>

            <hr>
    </section>

    <div class="multi_contact">
        <div class="contact_mail">
            <div class="intro_mail">
                <p>Vous pouvez nous écrire à cette adresse ou via le formulaire ci-dessous : </p>
                <div class="mail">
                    <img src="<?= get_theme_file_uri() ?>/assets/img/mail.png" alt="Icone de mail">
                    <a REF="mailto:contact@pompes-funebres-musulmanes.fr">contact@pompes-funebres-musulmanes.fr</a>
                </div>
            </div>
            <?php echo do_shortcode('[wpforms id="' . $wpformId . '"]');    ?>
        </div>

        <div class="localisation_phone">
            <div class="localisation">
                <div class="bloc_adresse">
                    <p>Notre bureau situé à Argentueil :
                    </p>
                    <div>
                        <img src="<?= get_theme_file_uri() ?>/assets/img/localisation.png" alt="Icone de localisation">
                        <p class="adress">5 rue Michel Carré, 95100 Argenteuil
                        </p>
                    </div>


                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10483.517100127618!2d2.2419582!3d48.9367412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x665d162871ff6437!2sPompes%20fun%C3%A8bres%20musulmanes%20kitab%20wa%20sunna!5e0!3m2!1sfr!2sfr!4v1660218557091!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            <div class="phone_fax">
                <p>Par téléphone / Whatsapp :</p>
                <div class="phone">
                    <a class="contact_tel" href="tel:+33620202298"><img src="<?= get_theme_file_uri() ?>/assets/img/phone.png" alt="Icone d'un téléphone"> </a>
                    <p class="number"> +33 (0) 6 20 20 22 98
                    </p>

                </div>
                <div class="whatsapp">
                    <a class="contact_whatsapp" target="_blank" href="https://wa.me/33620202298/?text=Je%20voudrais%20me%20renseigner%20sur%20vos%20services"><img src="<?= get_theme_file_uri() ?>/assets/img/whatsapp.png" alt="Icone Whatsapp"></a>
                    <p class="number"> +33 (0) 6 20 20 22 98
                    </p>

                </div>
                <p>Par fax :</p>
                <div class="fax">
                    <a href="fax:+33957714124"><img src="<?= get_theme_file_uri() ?>/assets/img/fax.png" alt="Icone d'un fax"> </a>
                    <p class="number"> +33 (0) 9 57 71 41 24

                    </p>
                </div>



            </div>
        </div>

    </div>
</div>

</div>




</div>



<?php get_footer() ?>