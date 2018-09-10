<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tribaltech Festival</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/assets/img/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/assets/img/safari-pinned-tab.svg" color="#c401e1">
    <meta name="theme-color" content="#c401e1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/assets/css/style.min.css" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5NGKTNH');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NGKTNH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div id="home"></div>
    <nav class="menu">
        <div class="container">
            <div class="grid">
                <a href="#home" class="logo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-header.png" alt="TribalTech">
                </a>
                <a href="#sobre">Sobre</a>
                <a href="#artistas">Artistas</a>
                <a href="#local">Local</a>
                <a href="#ingressos">Ingressos</a>
                <a href="#contato">Contato</a>
                <a href="#" class="menu-mobile"><span class="icon-menu"></span></a>
            </div>
        </div>
    </nav>

    <nav class="nav-mobile">
        <a href="#sobre">Sobre</a>
        <a href="#artistas">Artistas</a>
        <a href="#local">Local</a>
        <a href="#ingressos">Ingressos</a>
        <a href="#contato">Contato</a>
    </nav>
    <div class="overlay-menu"></div>