<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;800;900&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <?php
    $url = site_url();


    $domain = explode('.', $_SERVER['HTTP_HOST']);
    $subdomain = $domain[0];

    $ville = ucfirst($subdomain);
    if ($ville == "Kremlinbicetre")
    { $ville="Kremlin Bicêtre";}
    ?>

    <header>

        <section class="logo_header">
            <a href="https://pompes-funebres-musulmanes.fr/" style="text-decoration: none;">
                <h1><?= bloginfo('name') ?></h1>
            </a>
            <h2><?= bloginfo('description') ?> - <span> <?= $ville ?></span></h2>
        </section>
        <section class="telephone">
            <div class="icons">
                <a class="logo_tel_nav" href="tel:+33620202298"><img src="<?= get_theme_file_uri() ?>/assets/img/mobil_call.png" alt="telephone"></a>
                <a class="logo_whatsapp_nav" target="_blank" href="https://wa.me/33620202298/?text=Je%20voudrais%20me%20renseigner%20sur%20vos%20services">
                    <img src="<?= get_theme_file_uri() ?>/assets/img/whatsapp.png" alt="Whatsapp">
                </a>
            </div>
            <div class="logo_out">
                <p>A votre disposition
                    <br>24h/24 - 7j/7
                    <br>
                    <a class="tel_nav" href="tel:+33620202298">06 20 20 22 98</a>
                </p>

            </div>




        </section>

    </header>

    <main>


        <!--     <div class="container"> -->