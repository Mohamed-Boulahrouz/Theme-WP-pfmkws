
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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1> <?php the_title() ?> </h1>

        <?php the_post_thumbnail()?>
        <?php the_content() ?>

    <?php endwhile;
else : ?>

    <h1>Pas d'articles</h1>

<?php endif; ?>
</div>
 




<?php get_footer() ?>
















 