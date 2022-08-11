<?php get_header() ?>

<?php
$url = site_url();


$domain = explode('.', $_SERVER['HTTP_HOST']);
$subdomain = $domain[0];

$ville = ucfirst($subdomain);

 
?>


<?php 

if ($ville == "Kremlinbicetre")
{ $wpformId="41";
$ville="Kremlin-Bicêtre";}

else if ($ville == "Argenteuil")
{ $wpformId="25";}

else if ($ville == "Pfmkws")
{ $wpformId="696";}

else if ($ville == "Clichy")
{ $wpformId="14";}

else if ($ville == "Eaubonne")
{ $wpformId="25";}

else if ($ville == "Antony")
{ $wpformId="20";}

else if ($ville == "Colombes")
{ $wpformId="14";}

else if ($ville == "Poissy")
{ $wpformId="6";}

else if ($ville == "Saint-denis")
{ $wpformId="22";}

else if ($ville == "Clamart")
{ $wpformId="7";}

else if ($ville == "Boulogne-billancourt")
{ $wpformId="5";
 $ville="Boulogne-Billancourt";}

else if ($ville == "Suresnes")
{ $wpformId="19";}

else if ($ville == "Creteil")
{ $wpformId="7";}

else if ($ville == "Nanterre")
{ $wpformId="29";}

else if ($ville == "Yvelines")
{ $wpformId="6";}

else if ($ville == "Valdoise")
{ $wpformId="5";
    $ville="Val d'Oise";
}

else if ($ville == "Pontoise")
{ $wpformId="6";}

else if ($ville == "Hautdeseine")
{ $wpformId="5";
    $ville="Hauts-de-Seine";
}

else if ($ville == "Saintouen")
{ $wpformId="5";
    $ville="Saint-Ouen";
}

else if ($ville == "Villejuif")
{ $wpformId="7";
 }
 
 else if ($ville == "Paris")
{ $wpformId="8";
 }

else if ($ville == "Versailles")
{ $wpformId="16";
 }

 
else if ($ville == "Sartrouville")
{ $wpformId="5";
 }

else if ($ville == "Gonesse")
{ $wpformId="5";
 }

else if ($ville == "Seinesaintdenis")
{ $wpformId="6";
    $ville="Seine-Saint-Denis";
}
?>
 
<div class="cadre_un">


    <section class="intro">

        <div class="text_intro_ask">

            Vous recherchez une pompe funèbre musulmane à <span><?= $ville ?> </span> ? </div>

        <div class="text_intro_answer">Les pompes funèbres musulmanes Kitab Wa Sunna interviennent sur votre ville sur simple demande.
        </div>

        <div class="images_un"><img src="<?= get_theme_file_uri() ?>/assets/img/lamps.jpg" alt=""></div>


    </section>
    </div>
    <div class="cadre_deux">
    
    <section class="services">
        <div class="intro_services">
            Notre pompe funèbre vous garantit les services suivants :

        </div>
        <div class="liste_services">
            <ul>
                <li>Tout d’abord, un accueil personnalisé: réactivité, écoute et soutien</li>
                <li>Ensuite, le transport du défunt, de son lieu de décès jusqu’à la chambre funéraire pour les personnes décédées hors de l’hôpital (à domicile).</li>
                <li>De plus, les démarches administratives (Hôpitaux, cliniques, funérarium, Mairie, Cimetière, Préfectures, Consulats, douane, etc.)</li>
                <li>Les rîtes funéraires dans le respect des prescriptions islamiques : lavage, linceul, prière funéraire (Salat Janaza)</li>
                <li>Le transport du défunt jusqu’au cimetière pour l’inhumation en carré musulman (si la ville en dispose).</li>
                <li>Enfin, le rapatriement du défunt vers son pays d’origine où qu’il soit dans le monde</li>
            </ul>
        </div>
        <div class="images_deux"><img src="<?= get_theme_file_uri() ?>/assets/img/mosquee.jpg" alt=""></div>
    </section>

    </div>
    
    <div class="cadre_trois">
    
    <section class="contact">
        <div class="intro_contact">
            La mort peut surgir à tout moment. <br>

        </div>
        <div class="text_contact">Aussi, nous sommes disponibles et pouvons intervenir sur <span><?= $ville ?></span> 24h/24 et 7j/7.</div>
        <div class="formulaire_contact">
        <?php echo do_shortcode('[wpforms id="'.$wpformId.'"]');    ?>
    
        </div>
        <div class="images_trois"><img src="<?= get_theme_file_uri() ?>/assets/img/quran_table.jpg" alt=""></div>
    </section>
    </div>



<?php get_footer() ?>