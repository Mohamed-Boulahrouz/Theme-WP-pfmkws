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


<body>
    <div id="scene">
        <div id="left-zone">
            <ul class="list">
                <li class="item"><input type="radio" id="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" name="basic_carousel" value="The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" checked="checked" /><label class="label_strawberry" for="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)">A votre service</label>
                    <div class="content content_strawberry">
                        <!-- <span class="picto"></span> -->


                        <section class="intro">
                            <div class="bg_back_un"></div>
                            <div class="text_intro_ask">

                                Vous recherchez une pompe funèbre musulmane à <span><?= $ville ?></span> ?

                            </div>

                            <div class="text_intro_answer">Les pompes funèbres musulmanes Kitab Wa Sunna interviennent sur votre ville sur simple demande.
                            </div>

                            <!--      <div class="images_un"><img src="<?= get_theme_file_uri() ?>/assets/img/lamps.jpg" alt="Lampes"></div> -->


                        </section>
                    </div>
                </li>
                <li class="item"><input type="radio" id="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa." name="basic_carousel" value="A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa." /><label class="label_banana" for="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa.">Nos garanties</label>
                    <div class="content content_banana">
                        <!-- <span class="picto"></span> -->


                        <section class="services">
                            <div class="bg_back_deux"></div>

                            <div class="intro_liste_services">
                                Notre pompe funèbre vous garantit les services suivants :

                            </div>
                            <div class="liste_des_services">
                                <ul>
                                    <li>Un accueil personnalisé: réactivité, écoute et soutien</li>
                                    <li>Le transport du défunt, de son lieu de décès jusqu’à la chambre funéraire (si décédé hors hôpital).</li>
                                    <li>Gestion de toutes les démarches administrative </li>
                                    <li>Les rîtes funéraires dans le respect des prescriptions islamiques : lavage, linceul, prière funéraire (Salat Janaza)</li>
                                    <li>Le transport du défunt jusqu’au cimetière pour l’inhumation en carré musulman (si la ville en dispose).</li>
                                    <li>Enfin, le rapatriement du défunt vers son pays d’origine où qu’il soit dans le monde</li>
                                </ul>
                            </div>


                            <!--     <div class="images_deux"> <img src="<?= get_theme_file_uri() ?>/assets/img/mosquee.jpg" alt="Mosquée"> </div> -->

                        </section>
                    </div>
                </li>
                <li class="item"><input type="radio" id="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." name="basic_carousel" value="The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." /><label class="label_apple" for="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.">Notre périmètre</label>
                    <div class="content content_apple">
                        <!-- <span class="picto"></span> -->
                        <section class="trois">
                            <div class="bg_back_trois"></div>

                            <div class="texte_trois">The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.</p>
                            </div>
                        </section>
                    </div>
                </li>
                <li class="item"><input type="radio" id="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." /><label class="label_orange" for="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Notre mission</label>
                    <div class="content content_orange">
                        <!-- <span class="picto"></span> -->
                        <section class="quatre">
                            <div class="bg_back_quatre"></div>

                            <div class="texte_quatre">
                                <p>Offrir aux <span>familles musulmanes endeuillées</span>  une prestation de qualité dans la pure tradition islamique.
                                </p>
                                
                            </div>
                        </section>
                    </div>

                </li>


            </ul>
        </div>
        <div id="right-zone"></div>
    </div>
</body>